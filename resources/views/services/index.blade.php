@extends('layouts.app')

@section('title', ($service['name'] ?? 'Service Details') . ' - StormVest Solar Energy')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[40vh] min-h-[300px] flex flex-col justify-end items-center text-center px-10 lg:px-16 pb-8 overflow-hidden">
        <img src="{{ asset('images/services/service-detail-hero.jpg') }}" alt="{{ $service['name'] ?? 'Service Details' }}" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full">
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-2">{{ $service['name'] ?? 'Energy Consulting' }}.</h1>
            <p class="text-white text-xs md:text-sm">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">Service Details</span>
            </p>
        </div>
    </section>

    {{-- SERVICE DETAILS CONTENT (Sticky Smaller Image / Scrolling Right Content) --}}
    <section class="px-10 lg:px-16 py-16 max-w-6xl mx-auto">
        <div class="flex flex-col lg:flex-row items-start gap-12 lg:gap-16">
            
            {{-- Left Side: Sticky Smaller Image & Button Container --}}
            <div class="w-full lg:w-[40%] lg:sticky lg:top-28">
                <div class="rounded-2xl overflow-hidden w-full aspect-square bg-gray-200 shadow-sm">
                    <img src="{{ asset('images/services/service-detail-content.jpg') }}" alt="{{ $service['name'] ?? 'Service Details' }}" class="w-full h-[60px]object-cover">
                </div>
                <a href="/contact" class="inline-flex items-center gap-2 mt-6 bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-sm px-6 py-3 rounded-full transition-colors">
                    Get This Service <span>↗</span>
                </a>
            </div>
            
            {{-- Right Side: Scrolling Detailed Content --}}
            <div class="w-full lg:w-[60%] space-y-6">
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Before committing to solar infrastructure, you need to know exactly what you need, what it will cost, and what you will get back. Our consulting service gives you that clarity with bankable precision.
                </p>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    We audit your facility's actual load patterns, model your financial returns with hard numbers, and guide you through the regulatory environment so nothing delays your project.
                </p>

                <h3 class="text-xl md:text-2xl font-bold text-[#1D1D1D] pt-6 border-t border-gray-100">What's Included:</h3>

                <div class="space-y-6">
                    <div>
                        <h4 class="text-lg md:text-xl font-semibold text-[#1D1D1D]">01 - Load Auditing</h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mt-1">
                            Detailed analysis of your consumption patterns to define actual power requirements and identify waste reduction opportunities.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-lg md:text-xl font-semibold text-[#1D1D1D]">02 - ROI Modeling</h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mt-1">
                            Financial projection of payback period, IRR, and LCOE to give you and your investors a bankable project case.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-lg md:text-xl font-semibold text-[#1D1D1D]">03 - Regulatory Navigation</h4>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed mt-1">
                            We handle local grid codes, net-metering policies, and carbon credit eligibility so compliance is never a bottleneck.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- CTA --}}
    <section class="relative text-center py-20 px-10 lg:px-16 overflow-hidden">
        <img src="{{ asset('images/about-cta-bg.avif') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#1D1D1D]/70"></div>
        <div class="relative z-10 max-w-3xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-normal mb-6 text-white leading-snug">
                Join us on our journey to a cleaner, greener, and more sustainable world.
            </h2>
            <a href="/contact" class="inline-block bg-[#FBD331] hover:bg-[#AFEB63] text-black font-semibold text-sm md:text-base px-8 py-4 rounded-full transition-colors">
                Contact Us
            </a>
        </div>
    </section>

@endsection