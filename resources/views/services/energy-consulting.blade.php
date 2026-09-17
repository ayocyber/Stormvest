@extends('layouts.app')

@section('title', 'Energy Consulting - StormVest Solar Energy')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[50vh] min-h-[400px] flex flex-col justify-end px-10 lg:px-16 pb-14 overflow-hidden">
        <img src="{{ asset('images/services/energy-consulting-hero.webp') }}" alt="Energy Consulting" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full text-center">
            <h1 class="text-[40px] md:text-[64px] font-semibold tracking-[-2px] leading-[1.2] text-white mb-6">Energy Consulting.</h1>
            <p class="text-white text-base">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">Service Details</span>
            </p>
        </div>
    </section>

    {{-- SERVICE DETAILS (With Sticky Image Scroll Effect) --}}
    <section class="px-10 lg:px-16 py-20 max-w-6xl mx-auto grid lg:grid-cols-12 gap-14 items-start">
        
        {{-- Sticky Left Column (Image & Button stay locked until section ends) --}}
        <div class="lg:col-span-5 lg:sticky lg:top-28">
            <div class="relative rounded-2xl overflow-hidden aspect-[4/3] shadow-sm bg-gray-100">
                <img src="{{ asset('images/services/energy-consulting-main.jpg') }}" alt="Energy Consulting" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <a href="/contact" class="inline-flex items-center justify-center gap-2 mt-6 bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-base px-7 py-3.5 rounded-full transition-colors">
    Get This Service 
    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M7 17L17 7M17 7H7M17 7V17"/>
    </svg>
</a>
        </div>

        {{-- Scrolling Right Column (Content scrolls past the sticky image) --}}
        <div class="lg:col-span-7 space-y-6">
            <p class="text-lg text-gray-600 leading-relaxed">
                Before committing to solar infrastructure, you need to know exactly what you need, what it will cost, and what you will get back. Our consulting service gives you that clarity with bankable precision.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                We audit your facility's actual load patterns, model your financial returns with hard numbers, and guide you through the regulatory environment so nothing delays your project.
            </p>

            <h3 class="text-2xl font-semibold text-[#1D1D1D] pt-4">What's included:</h3>

            <div class="space-y-8">
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

    {{-- CTA --}}
<section class="relative text-center py-24 px-6 md:px-16 overflow-hidden">
    <img src="{{ asset('images/about-cta-bg.avif') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-[#1D1D1D]/70"></div>
    <div class="relative z-10 max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-normal mb-6 text-white leading-snug">
            Join us on our journey to a cleaner, greener, and more sustainable world.
        </h2>
        <a href="/contact" class="inline-block bg-[#FBD331] hover:bg-[#AFEB63] text-black font-semibold text-lg px-8 py-4 rounded-full transition-colors">
            Contact Us
        </a>
    </div>
</section>

@endsection