@extends('layouts.app')

@section('title', 'Our Services - StormVest Solar Energy')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[420px] md:h-[480px] flex flex-col justify-end px-10 lg:px-16 pb-14 overflow-hidden">
        <img src="{{ asset('images/services/services-hero.jpg') }}" alt="Our Services" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6">Our Services</h1>
            <p class="text-white text-base">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">Our Services</span>
            </p>
        </div>
    </section>

    {{-- INTRO --}}
    <section class="px-10 lg:px-16 py-16 max-w-6xl mx-auto">
        <p class="text-[#AFEB63] text-base font-medium mb-4">// What We Do</p>
        <h2 class="text-4xl md:text-5xl font-bold max-w-3xl leading-tight text-[#1D1D1D]">
            End-to-end solar infrastructure services, from first audit to lifetime monitoring.
        </h2>
    </section>

    {{-- SERVICES GRID --}}
    <section class="px-10 lg:px-16 max-w-6xl mx-auto pb-24">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @php
                // TEMP: hardcoded service list until this is wired to a Service model/DB table.
                $services = [
                    [
                        'slug'  => 'energy-consulting',
                        'name'  => 'Energy Consulting',
                        'blurb' => 'Load auditing, ROI modeling, and regulatory navigation before you commit to infrastructure.',
                    ],
                    [
                        'slug'  => 'epc-project-delivery',
                        'name'  => 'EPC Project Delivery',
                        'blurb' => 'Full engineering, procurement, and construction delivery from design to commissioning.',
                    ],
                    [
                        'slug'  => 'battery-storage-bess',
                        'name'  => 'Battery Storage (BESS)',
                        'blurb' => 'Reliable energy storage systems that keep power flowing when the grid can\'t.',
                    ],
                    [
                        'slug'  => 'active-monitoring',
                        'name'  => 'Active Monitoring',
                        'blurb' => '24/7 system monitoring and maintenance to guarantee performance over the project lifetime.',
                    ],
                ];
            @endphp

            @foreach ($services as $service)
                <a href="/services/{{ $service['slug'] }}" class="group relative rounded-2xl bg-[#0504AA] p-8 flex flex-col justify-between min-h-[220px] overflow-hidden">
                    <div class="w-10 h-10 rounded-lg bg-[#AFEB63] mb-8"></div>
                    <div>
                        <h6 class="text-white font-semibold text-lg mb-2">{{ $service['name'] }}</h6>
                        <p class="text-gray-200 text-sm leading-relaxed">{{ $service['blurb'] }}</p>
                    </div>
                </a>
            @endforeach

        </div>
    </section>

    {{-- CTA (with real background image) --}}
    <section class="relative text-center py-32 px-10 lg:px-16 overflow-hidden">
        <img src="{{ asset('images/about-cta-bg.avif') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#1D1D1D]/60"></div>
        <div class="relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold max-w-2xl mx-auto mb-8 text-white">
                Join us on our journey to a cleaner, greener, and more sustainable world.
            </h2>
            <a href="/contact" class="inline-block bg-[#FBD331] hover:bg-[#AFEB63] text-black font-semibold text-lg px-8 py-4 rounded-full transition-colors">
                Contact Us
            </a>
        </div>
    </section>

@endsection