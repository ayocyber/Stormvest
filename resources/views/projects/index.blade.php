@extends('layouts.app')

@section('title', 'Projects - StormVest Solar Energy')

@section('content')

    {{-- HERO (Height reduced to roughly half) --}}
    <section class="relative h-[250px] md:h-[280px] flex flex-col justify-end px-10 lg:px-16 pb-8 overflow-hidden">
        <img src="{{ asset('images/projects/projects-hero.jpg') }}" alt="Projects" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full text-center">
            <h1 class="text-2xl md:text-4xl font-semibold tracking-tight text-white mb-3">Projects</h1>
            <p class="text-white text-sm">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">Projects</span>
            </p>
        </div>
    </section>

    {{-- INTRO --}}
    <section class="px-10 lg:px-16 py-14 max-w-6xl mx-auto">
        <p class="text-[#AFEB63] text-sm font-medium mb-3">// Our Work</p>
        <h2 class="text-3xl md:text-4xl font-bold max-w-3xl leading-snug text-[#1D1D1D]">
            A track record of delivered, high-value solar infrastructure across Nigeria.
        </h2>
    </section>

    {{-- PROJECTS GRID --}}
    <section class="px-10 lg:px-16 max-w-6xl mx-auto pb-20">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @php
                // TEMP: hardcoded project list until this is wired to a Project model/DB table.
                // Once you have a `projects` table, swap this @php block for a controller passing $projects.
                $projects = [
                    [
                        'slug'  => 'zee-realty-estate-solar-hub',
                        'name'  => 'Zee Realty Estate Solar Hub',
                        'image' => 'zee-realty-main.jpg',
                        'size'  => '800 kWp',
                    ],
                    [
                        'slug'  => 'izenergy-joint-epc-delivery',
                        'name'  => 'Izenergy Joint EPC Delivery',
                        'image' => 'izenergy.jpg',
                        'size'  => null,
                    ],
                    [
                        'slug'  => 'megaloite-industrial-power-station',
                        'name'  => 'Megaloite Industrial Power Station',
                        'image' => 'megaloite.jpg',
                        'size'  => null,
                    ],
                    [
                        'slug'  => 'fcmb-headquarters-solar-retrofit',
                        'name'  => 'FCMB Headquarters Solar Retrofit',
                        'image' => 'fcmb.jpg',
                        'size'  => null,
                    ],
                ];
            @endphp

            @foreach ($projects as $project)
                <a href="/projects/{{ $project['slug'] }}" class="group relative rounded-2xl overflow-hidden aspect-[4/5]">
                    <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['name'] }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/10 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h4 class="text-white font-bold text-xl leading-snug">{{ $project['name'] }}</h4>
                        @if ($project['size'])
                            <p class="text-[#AFEB63] text-sm font-medium mt-1.5">{{ $project['size'] }}</p>
                        @endif
                    </div>
                </a>
            @endforeach

        </div>
    </section>

    {{-- CTA --}}
    <section class="relative text-center py-24 px-10 lg:px-16 overflow-hidden">
        <img src="{{ asset('images/about-cta-bg.avif') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#1D1D1D]/60"></div>
        <div class="relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold max-w-2xl mx-auto mb-6 text-white">
                Join us on our journey to a cleaner, greener, and more sustainable world.
            </h2>
            <a href="/contact" class="inline-block bg-[#FBD331] hover:bg-[#AFEB63] text-black font-semibold text-base px-7 py-3.5 rounded-full transition-colors">
                Contact Us
            </a>
        </div>
    </section>

@endsection