/**
 * Pipe orbit: a real-time 3D copper repipe manifold whose camera angle is driven by the scroll
 * position. Every scroll step turns the camera a little further around the assembly, so the hero
 * shows the same plumbing from a new angle at every point of the ride (a 250° sweep, with the
 * viewpoint settling from above to eye level).
 *
 * Built procedurally with three.js: no model files, no textures, just copper, brass and steel
 * materials under a cream key light and a teal rim light, lit by a procedural room environment so
 * the metals have something to reflect. Rendering is on demand (only when the angle or size
 * changes), so the page costs nothing while the reader is not scrolling.
 */
import * as THREE from 'three';
import { RoomEnvironment } from 'three/examples/jsm/environments/RoomEnvironment.js';

const clamp = (v, min, max) => Math.min(max, Math.max(min, v));
const lerp = (a, b, t) => a + (b - a) * t;
const easeInOut = (t) => (t < 0.5 ? 2 * t * t : 1 - Math.pow(-2 * t + 2, 2) / 2);

const COLORS = { copper: 0xb87333, brass: 0xd9a441, steel: 0xcfd4d6, cream: 0xfaf6ee, navy: 0x14283a, teal: 0x44b5a4, rust: 0xc2502d };

export function mountPipeOrbit(canvas) {
    const renderer = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true, powerPreference: 'low-power' });
    renderer.setPixelRatio(Math.min(1.5, window.devicePixelRatio || 1));
    renderer.outputColorSpace = THREE.SRGBColorSpace;
    renderer.toneMapping = THREE.ACESFilmicToneMapping;
    renderer.toneMappingExposure = 1.05;

    const scene = new THREE.Scene();
    scene.environment = new THREE.PMREMGenerator(renderer).fromScene(new RoomEnvironment(), 0.04).texture;
    scene.environmentIntensity = 0.55;

    const camera = new THREE.PerspectiveCamera(30, 1, 0.1, 50);
    const target = new THREE.Vector3(0, 0.35, -0.2); // the rig's centre; the view offset below keeps it right of the headline

    // ---------- lights: cream key, teal rim, soft navy fill ----------
    scene.add(new THREE.HemisphereLight(COLORS.cream, COLORS.navy, 0.5));
    const key = new THREE.DirectionalLight(COLORS.cream, 2.4); key.position.set(3, 5, 4); scene.add(key);
    const rim = new THREE.DirectionalLight(COLORS.teal, 3.2); rim.position.set(-4, 2, -3); scene.add(rim);
    const fill = new THREE.PointLight(COLORS.teal, 6, 12); fill.position.set(0.5, -2, 3); scene.add(fill);

    // ---------- materials ----------
    const copper = new THREE.MeshStandardMaterial({ color: COLORS.copper, metalness: 0.9, roughness: 0.32 });
    const brass = new THREE.MeshStandardMaterial({ color: COLORS.brass, metalness: 0.9, roughness: 0.3 });
    const steel = new THREE.MeshStandardMaterial({ color: COLORS.steel, metalness: 0.75, roughness: 0.4 });
    const lever = new THREE.MeshStandardMaterial({ color: COLORS.rust, metalness: 0.2, roughness: 0.55 });
    const handle = new THREE.MeshStandardMaterial({ color: COLORS.teal, metalness: 0.1, roughness: 0.6 });
    const face = new THREE.MeshStandardMaterial({ color: COLORS.cream, metalness: 0, roughness: 0.9 });

    // ---------- geometry helpers ----------
    const R = 0.13; // pipe radius
    const rig = new THREE.Group();
    scene.add(rig);

    /** A straight pipe between two points. */
    function pipe(a, b, radius = R, material = copper) {
        const from = new THREE.Vector3(...a), to = new THREE.Vector3(...b);
        const length = from.distanceTo(to);
        const mesh = new THREE.Mesh(new THREE.CylinderGeometry(radius, radius, length, 28, 1), material);
        mesh.position.copy(from).lerp(to, 0.5);
        mesh.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), to.clone().sub(from).normalize());
        rig.add(mesh);
        return mesh;
    }
    /** A soldered fitting at a joint: slightly fatter than the pipe. */
    function fitting(p, radius = R * 1.35, material = brass) {
        const mesh = new THREE.Mesh(new THREE.SphereGeometry(radius, 24, 18), material);
        mesh.position.set(...p);
        rig.add(mesh);
        return mesh;
    }
    /** A quarter-turn ball valve on a vertical riser: brass body with a teal handle. */
    function riserValve(x, y) {
        const body = new THREE.Mesh(new THREE.CylinderGeometry(R * 1.6, R * 1.6, 0.34, 28), brass);
        body.position.set(x, y, 0); rig.add(body);
        const stem = new THREE.Mesh(new THREE.CylinderGeometry(0.03, 0.03, 0.16, 12), steel);
        stem.rotation.x = Math.PI / 2; stem.position.set(x, y, R * 1.6 + 0.08); rig.add(stem);
        const grip = new THREE.Mesh(new THREE.BoxGeometry(0.06, 0.36, 0.05), handle);
        grip.position.set(x, y, R * 1.6 + 0.17); rig.add(grip);
    }

    // ---------- the manifold ----------
    const mainY = -0.35;
    pipe([-2.3, mainY, 0], [2.1, mainY, 0]);                      // main supply line
    fitting([-2.3, mainY, 0], R * 1.3, copper);                   // inlet cap

    // Main shut-off: a big brass ball valve with a rust-red lever.
    const shutoff = new THREE.Mesh(new THREE.CylinderGeometry(R * 2, R * 2, 0.55, 32), brass);
    shutoff.rotation.z = Math.PI / 2; shutoff.position.set(-1.75, mainY, 0); rig.add(shutoff);
    const stem = new THREE.Mesh(new THREE.CylinderGeometry(0.04, 0.04, 0.22, 12), steel);
    stem.position.set(-1.75, mainY + R * 2 + 0.1, 0); rig.add(stem);
    const bar = new THREE.Mesh(new THREE.BoxGeometry(0.62, 0.06, 0.1), lever);
    bar.position.set(-1.75 + 0.2, mainY + R * 2 + 0.22, 0); bar.rotation.y = 0.35; rig.add(bar);

    // Pressure gauge on a short stub, facing the camera's starting side.
    pipe([-1.1, mainY, 0], [-1.1, mainY + 0.42, 0], R * 0.55, brass);
    const gaugeBody = new THREE.Mesh(new THREE.CylinderGeometry(0.26, 0.26, 0.09, 36), steel);
    gaugeBody.rotation.x = Math.PI / 2; gaugeBody.position.set(-1.1, mainY + 0.62, 0); rig.add(gaugeBody);
    const dial = new THREE.Mesh(new THREE.CircleGeometry(0.2, 36), face);
    dial.position.set(-1.1, mainY + 0.62, 0.05); rig.add(dial);
    const needle = new THREE.Mesh(new THREE.BoxGeometry(0.02, 0.17, 0.01), lever);
    needle.position.set(-1.1 + 0.03, mainY + 0.62 + 0.06, 0.056); needle.rotation.z = -0.6; rig.add(needle);

    // Four risers with quarter-turn valves, each elbowing back away from the viewer at the top.
    const risers = [-0.45, 0.2, 0.85, 1.5];
    risers.forEach((x, i) => {
        const top = 1.15 + (i % 2) * 0.22;
        fitting([x, mainY, 0]);                                 // tee
        pipe([x, mainY, 0], [x, top, 0]);
        riserValve(x, 0.35);
        fitting([x, top, 0]);                                   // elbow
        pipe([x, top, 0], [x, top, -0.75]);
        fitting([x, top, -0.75], R * 1.2, copper);              // stub cap
    });

    // Right end turns up into a tall line (to the heater) with a copper elbow.
    fitting([2.1, mainY, 0]);
    pipe([2.1, mainY, 0], [2.1, 1.6, 0]);
    fitting([2.1, 1.6, 0]);
    pipe([2.1, 1.6, 0], [2.1, 1.6, -1.3]); // feed line heading off to the water heater
    fitting([2.1, 1.6, -1.3], R * 1.2, copper);

    rig.position.set(0, 0, 0);

    // ---------- camera orbit ----------
    let progress = 0.25, width = 0, height = 0;
    const apply = () => {
        const sweep = easeInOut(progress);
        const azimuth = THREE.MathUtils.degToRad(-40 + sweep * 250); // a 250° sweep, finishing on a three-quarter view from behind
        const elevation = THREE.MathUtils.degToRad(16 + 22 * Math.sin(Math.PI * sweep)); // rises over the top mid-sweep, settles to eye level
        const distance = lerp(7.6, 6.8, sweep) + 1.4 * Math.sin(Math.PI * sweep); // pull back a little while passing end-on
        camera.position.set(
            target.x + distance * Math.cos(elevation) * Math.sin(azimuth),
            target.y + distance * Math.sin(elevation),
            target.z + distance * Math.cos(elevation) * Math.cos(azimuth),
        );
        camera.lookAt(target);
        renderer.render(scene, camera);
    };

    function resize() {
        const rect = canvas.parentElement.getBoundingClientRect();
        if (!rect.width || !rect.height || (rect.width === width && rect.height === height)) return;
        width = rect.width; height = rect.height;
        renderer.setSize(width, height, false);
        camera.aspect = width / height;
        camera.fov = width < height ? 50 : 32; // portrait phones see more of the rig
        // Render the left part of a wider virtual viewport, so the orbit's centre sits right of the headline on wide screens.
        const spread = width > 1024 ? 1.5 : width > 640 ? 1.2 : 1;
        camera.setViewOffset(width * spread, height, 0, 0, width, height);
        camera.updateProjectionMatrix();
        apply();
    }
    new ResizeObserver(resize).observe(canvas.parentElement);
    resize();

    const api = {
        /** 0..1 scroll progress: the camera sweeps 270° around the manifold. Renders only on change. */
        setProgress(p) {
            const next = clamp(p, 0, 1);
            if (Math.abs(next - progress) < 0.0005) return;
            progress = next;
            apply();
        },
    };
    canvas.__orbit = api; // handy for debugging from the console
    return api;
}
