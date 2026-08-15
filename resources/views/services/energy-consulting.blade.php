@extends('layouts.app')

@section('title', 'Energy Consulting - StormVest Solar Energy')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[500px] md:h-[560px] flex flex-col justify-end px-10 lg:px-16 pb-14 overflow-hidden">
        <img src="{{ asset('images/services/energy-consulting-hero.webp') }}" alt="Energy Consulting" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full text-center">
            <h1 class="text-[40px] md:text-[64px] font-semibold tracking-[-2px] leading-[1.2] text-white mb-6">Energy Consulting.</h1>
            <p class="text-white text-base">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">Service Details</span>
            </p>
        </div>
    </section>

    {{-- SERVICE DETAILS --}}
    <section class="px-10 lg:px-16 py-20 max-w-6xl mx-auto grid md:grid-cols-2 gap-14 items-start">
        {{-- Image with "Get This Service" pill button --}}
        <div>
            <div class="relative rounded-2xl overflow-hidden aspect-[2/3]">
                <img src="{{ asset('images/services/energy-consulting-main.jpg') }}" alt="Energy Consulting" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <a href="/contact" class="inline-block mt-6 bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-base px-7 py-3.5 rounded-full transition-colors">
                Get This Service ↗
            </a>
        </div>

        {{-- Content --}}
        <div class="space-y-6">
            <p class="text-lg text-gray-600 leading-relaxed">
                Before committing to solar infrastructure, you need to know exactly what you need, what it will cost, and what you will get back. Our consulting service gives you that clarity with bankable precision.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                We audit your facility's actual load patterns, model your financial returns with hard numbers, and guide you through the regulatory environment so nothing delays your project.
            </p>

            <h3 class="text-2xl font-semibold text-[#1D1D1D] pt-4">What's included:</h3>

            <div class="space-y-5">
                <div>
                    <h4 class="text-xl font-semibold text-[#1D1D1D]">01 — Load Auditing</h4>
                    <p class="text-lg text-gray-600 leading-relaxed mt-2">
                        Detailed analysis of your consumption patterns to define actual power requirements and identify waste reduction opportunities.
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#1D1D1D]">02 — ROI Modeling</h4>
                    <p class="text-lg text-gray-600 leading-relaxed mt-2">
                        Financial projection of payback period, IRR, and LCOE to give you and your investors a bankable project case.
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#1D1D1D]">03 — Regulatory Navigation</h4>
                    <p class="text-lg text-gray-600 leading-relaxed mt-2">
                        We handle local grid codes, net-metering policies, and carbon credit eligibility so compliance is never a bottleneck.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- OUR SERVICES (excludes this page's own service) --}}
    <section class="bg-white px-10 lg:px-16 max-w-6xl mx-auto pb-24 pt-16">
        <h2 class="text-4xl md:text-5xl font-bold text-[#1D1D1D] mb-12">Our Services</h2>
        <div class="grid sm:grid-cols-3 gap-6">
            <a href="/services/epc-project-delivery" class="group relative rounded-2xl bg-[#0504AA] p-8 flex flex-col justify-between min-h-[240px] overflow-hidden">
                <div class="transition-transform duration-300 group-hover:scale-105 origin-top-left">
                    <h6 class="text-white font-semibold text-lg mb-2">EPC Project Delivery</h6>
                    <p class="text-gray-200 text-sm leading-relaxed">Full engineering, procurement, and construction delivery from design to commissioning.</p>
                </div>
                <div class="relative self-end w-16 h-16 rounded-xl bg-[#FBD331] group-hover:bg-[#1D1D1D] transition-colors duration-300 overflow-hidden mt-6">
                    <div class="absolute inset-0 flex items-center justify-center opacity-100 group-hover:opacity-0 transition-opacity duration-300">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#1D1D1D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 0 0 5.4-5.4l-2.8 2.8-2-2z"/></svg>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#FBD331" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </div>
                </div>
            </a>
            <a href="/services/battery-storage-bess" class="group relative rounded-2xl bg-[#0504AA] p-8 flex flex-col justify-between min-h-[240px] overflow-hidden">
                <div class="transition-transform duration-300 group-hover:scale-105 origin-top-left">
                    <h6 class="text-white font-semibold text-lg mb-2">Battery Storage (BESS)</h6>
                    <p class="text-gray-200 text-sm leading-relaxed">Store, shift, and back up your power to keep operations running when the grid can't.</p>
                </div>
                <div class="relative self-end w-16 h-16 rounded-xl bg-[#FBD331] group-hover:bg-[#1D1D1D] transition-colors duration-300 overflow-hidden mt-6">
                    <div class="absolute inset-0 flex items-center justify-center opacity-100 group-hover:opacity-0 transition-opacity duration-300">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#1D1D1D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="17" height="10" rx="2"/><path d="M22 10v4M6 10v4M10 10v4"/></svg>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#FBD331" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </div>
                </div>
            </a>
            <a href="/services/active-monitoring" class="group relative rounded-2xl bg-[#0504AA] p-8 flex flex-col justify-between min-h-[240px] overflow-hidden">
                <div class="transition-transform duration-300 group-hover:scale-105 origin-top-left">
                    <h6 class="text-white font-semibold text-lg mb-2">Active Monitoring</h6>
                    <p class="text-gray-200 text-sm leading-relaxed">24/7 system monitoring and maintenance to guarantee performance over the project lifetime.</p>
                </div>
                <div class="relative self-end w-16 h-16 rounded-xl bg-[#FBD331] group-hover:bg-[#1D1D1D] transition-colors duration-300 overflow-hidden mt-6">
                    <div class="absolute inset-0 flex items-center justify-center opacity-100 group-hover:opacity-0 transition-opacity duration-300">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#1D1D1D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l2-7 4 14 2-7h6"/></svg>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#FBD331" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </div>
                </div>
            </a>
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