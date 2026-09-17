@extends('layouts.app')

@section('title', ($service['name'] ?? 'Service Details') . ' - StormVest Solar Energy')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[45vh] min-h-[380px] md:min-h-[450px] flex flex-col justify-end items-center text-center px-10 lg:px-16 pb-12 overflow-hidden">
        <img src="{{ asset('images/services/energy-consulting-hero.webp') }}" alt="{{ $service['name'] ?? 'Service Details' }}" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-3">{{ $service['name'] ?? 'Energy Consulting' }}.</h1>
            <p class="text-white text-xs md:text-sm">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">Service Details</span>
            </p>
        </div>
    </section>

    {{-- SERVICE DETAILS (With Sticky Image Scroll Effect) --}}
    <section class="px-10 lg:px-16 py-20 max-w-6xl mx-auto grid lg:grid-cols-12 gap-14 items-start">
        
      {{-- Sticky Left Column (Image & Button stay locked until section ends) --}}
        <div class="lg:col-span-5 lg:sticky lg:top-28">
            <div class="relative rounded-2xl overflow-hidden aspect-[4/3] shadow-sm bg-gray-100">
                <img src="{{ asset('images/services/epc-project-delivery-main.jpg') }}" alt="Energy Consulting" class="absolute inset-0 w-full h-full object-cover">
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

            <div class="space-y-5">
                <div>
                    <h4 class="text-xl font-semibold text-[#1D1D1D]">01 — Energy Audit</h4>
                    <p class="text-lg text-gray-600 leading-relaxed mt-2">
                        Comprehensive analysis of your historical consumption patterns and peak load profiles to establish baseline requirements.
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#1D1D1D]">02 — Financial Modeling</h4>
                    <p class="text-lg text-gray-600 leading-relaxed mt-2">
                        Detailed projections of capital expenditure, operational savings, payback periods, and long-term asset ROI.
                    </p>
                </div>
                <div>
                    <h4 class="text-xl font-semibold text-[#1D1D1D]">03 — Regulatory Roadmap</h4>
                    <p class="text-lg text-gray-600 leading-relaxed mt-2">
                        Guidance through local utility interconnections, permits, and compliance policies to ensure seamless integration.
                    </p>
                </div>
            </div>

            <h3 class="text-2xl font-semibold text-[#1D1D1D] pt-4">Performance standards:</h3>

            <div class="space-y-4">
                <p class="text-lg text-gray-600 leading-relaxed">
                    <strong class="text-[#1D1D1D]">100% Data-Driven</strong> — Every recommendation backed by physical metering and verified simulations.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    <strong class="text-[#1D1D1D]">Bankable Insights</strong> — Reports structured to meet rigorous institutional investment criteria.
                </p>
            </div>
        </div>
    </section>

    {{-- OUR SERVICES --}}
    <section class="bg-white px-10 lg:px-16 max-w-6xl mx-auto pb-24 pt-16">
        <h2 class="text-4xl md:text-5xl font-bold text-[#1D1D1D] mb-12">Our Services</h2>
        <div class="grid sm:grid-cols-3 gap-8">
            <a href="/services/epc-project-delivery" class="group relative rounded-2xl bg-[#0504AA] p-10 flex flex-col justify-between min-h-[300px] overflow-hidden">
                <div class="transition-transform duration-300 group-hover:scale-105 origin-top-left">
                    <h6 class="text-white font-semibold text-xl mb-3">EPC Project Delivery</h6>
                    <p class="text-gray-200 text-base leading-relaxed">Concept to commissioning, handled in-house with Tier-1 components and global standards.</p>
                </div>
                <div class="relative self-end w-16 h-16 rounded-xl bg-[#FBD331] group-hover:bg-[#1D1D1D] transition-colors duration-300 overflow-hidden mt-6">
                    <div class="absolute inset-0 flex items-center justify-center opacity-100 group-hover:opacity-0 transition-opacity duration-300">
                        <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="#1D1D1D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20M4 20V10l8-6 8 6v10M12 11v9"/></svg>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="#FBD331" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </div>
                </div>
            </a>
            
            <a href="/services/battery-storage-bess" class="group relative rounded-2xl bg-[#0504AA] p-10 flex flex-col justify-between min-h-[300px] overflow-hidden">
                <div class="transition-transform duration-300 group-hover:scale-105 origin-top-left">
                    <h6 class="text-white font-semibold text-xl mb-3">Battery Storage (BESS)</h6>
                    <p class="text-gray-200 text-base leading-relaxed">Store, shift, and back up your power to keep operations running when the grid can't.</p>
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
            
            <a href="/services/active-monitoring" class="group relative rounded-2xl bg-[#0504AA] p-10 flex flex-col justify-between min-h-[300px] overflow-hidden">
                <div class="transition-transform duration-300 group-hover:scale-105 origin-top-left">
                    <h6 class="text-white font-semibold text-xl mb-3">Active Monitoring</h6>
                    <p class="text-gray-200 text-base leading-relaxed">24/7 system monitoring and maintenance to guarantee performance over the project lifetime.</p>
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