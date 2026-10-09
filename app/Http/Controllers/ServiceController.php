<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('site.services', ['services' => Service::active()->get(), 'offers' => config('company.offers')]);
    }

    public function show(Service $service): View
    {
        abort_unless($service->active, 404);
        if ($service->slug === 'repipes') {
            return $this->repipes();
        }
        if ($service->slug === 'emergency') {
            return $this->emergency();
        }

        return view('site.service', ['service' => $service, 'others' => Service::active()->where('id', '!=', $service->id)->get()]);
    }

    /** The flagship page: whole-house repipes with a lifetime warranty. */
    public function repipes(): View
    {
        return view('site.repipes', ['service' => Service::where('slug', 'repipes')->firstOrFail(), 'testimonials' => Testimonial::active()->where('treatment', 'Whole-house repipe')->take(3)->get()]);
    }

    public function emergency(): View
    {
        return view('site.emergency', ['service' => Service::where('slug', 'emergency')->firstOrFail()]);
    }
}
