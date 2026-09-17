@extends('layouts.app')

@section('title', 'About Us - StormVest Solar Energy')

@push('styles')
<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    .fade-in {
        animation: fadeIn 0.6s cubic-bezier(0.44, 0, 0.56, 1) forwards;
    }
    .fade-in-delay {
        animation: fadeIn 0.6s cubic-bezier(0.44, 0, 0.56, 1) 0.3s forwards;
        opacity: 0;
    }
    .fade-in-delay-2 {
        animation: fadeIn 0.6s cubic-bezier(0.44, 0, 0.56, 1) 0.5s forwards;
        opacity: 0;
    }
</style>
@endpush

@section('content')

    {{-- HERO (Half of screen height) --}}
    <section class="relative h-[50vh] min-h-[400px] flex flex-col justify-end px-10 lg:px-16 pb-12 overflow-hidden">
        <img src="{{ asset('images/about-hero.avif') }}" alt="About Us" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-3">About Us</h1>
            <p class="text-white text-sm md:text-base">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">About Us</span>
            </p>
        </div>
    </section>

    {{-- OUR STORY --}}
    <section class="px-10 lg:px-16 py-16 max-w-6xl mx-auto fade-in">
        <div class="flex flex-col md:flex-row gap-8 items-start">
            <div class="md:w-48 shrink-0">
                <span class="text-[#FBD331] text-sm md:text-base font-semibold">// Our Story</span>
            </div>
            <div>
                <h2 class="text-2xl md:text-[28px] font-normal max-w-4xl leading-[1.4] text-[#1D1D1D]">
                    Stormvest Solar Energy plans, builds, and operates high value solar infrastructure for Nigeria's institutions and businesses.
                </h2>
            </div>
        </div>
    </section>

    {{-- STATS (Matched Alternating Colors & Alignment) --}}
    <section class="px-10 lg:px-16 max-w-6xl mx-auto grid md:grid-cols-4 gap-6 py-10 border-t border-gray-100 fade-in-delay">
        
        {{-- Card 1: Light Gray (Left aligned) --}}
        <div class="bg-[#F5F5F5] rounded-2xl p-6 flex flex-col justify-between">
            <div>
                <h3 class="text-3xl md:text-4xl font-medium mb-3 text-[#1D1D1D]">5MW</h3>
                <p class="font-semibold mb-1 text-sm md:text-base text-[#1D1D1D]">Realized projects MWp</p>
            </div>
            <p class="text-gray-500 text-xs md:text-sm leading-relaxed mt-4">Solar infrastructure installed and commissioned across commercial and industrial sites in Nigeria.</p>
        </div>

        {{-- Card 2: Deep Blue (Right aligned, Yellow accents) --}}
        <div class="bg-[#0504AA] text-white rounded-2xl p-6 flex flex-col justify-between text-right">
            <div>
                <h3 class="text-3xl md:text-4xl font-medium mb-3 text-[#FBD331]">15MW+</h3>
                <p class="font-semibold mb-1 text-sm md:text-base text-[#FBD331]">EPC Pipeline MWp</p>
            </div>
            <p class="text-gray-200 text-xs md:text-sm leading-relaxed mt-4">Active engineering, procurement, and construction projects currently in development.</p>
        </div>

        {{-- Card 3: Light Gray (Left aligned) --}}
        <div class="bg-[#F5F5F5] rounded-2xl p-6 flex flex-col justify-between">
            <div>
                <h3 class="text-3xl md:text-4xl font-medium mb-3 text-[#1D1D1D]">50MW+</h3>
                <p class="font-semibold mb-1 text-sm md:text-base text-[#1D1D1D]">Development Pipeline MWp</p>
            </div>
            <p class="text-gray-500 text-xs md:text-sm leading-relaxed mt-4">Identified institutional and commercial opportunities at feasibility and scoping stage across Nigeria.</p>
        </div>

        {{-- Card 4: Deep Blue (Right aligned, Yellow accents) --}}
        <div class="bg-[#0504AA] text-white rounded-2xl p-6 flex flex-col justify-between text-right">
            <div>
                <h3 class="text-3xl md:text-4xl font-medium mb-3 text-[#FBD331]">24/7</h3>
                <p class="font-semibold mb-1 text-sm md:text-base text-[#FBD331]">Active Monitoring</p>
            </div>
            <p class="text-gray-200 text-xs md:text-sm leading-relaxed mt-4">Every system we install is watched, maintained, and guaranteed to perform.</p>
        </div>

    </section>

    {{-- VISION / MISSION (side by side, mirrored) --}}
    <section class="px-10 lg:px-16 max-w-6xl mx-auto py-16 border-t border-gray-100 fade-in-delay-2">
        <div class="flex flex-col md:flex-row items-center gap-14 mb-16">
            <div class="flex-1">
                <h3 class="text-3xl font-normal mb-4 text-[#1D1D1D]">Vision</h3>
                <p class="text-gray-600 text-base leading-relaxed max-w-lg">
                    To become Africa's most trusted solar infrastructure company — recognised for institutional quality, long-term client partnerships, and a measurable contribution to the continent's energy independence.
                </p>
            </div>
            <div class="flex-1 w-full">
                <img src="{{ asset('images/about-vision.avif') }}" alt="Vision" class="w-full aspect-video object-cover rounded-2xl shadow-sm">
            </div>
        </div>
        <div class="flex flex-col md:flex-row-reverse items-center gap-14">
            <div class="flex-1">
                <h3 class="text-3xl font-normal mb-4 text-[#1D1D1D]">Mission</h3>
                <p class="text-gray-600 text-base leading-relaxed max-w-lg">
                    To deliver bankable, high-performance solar energy infrastructure that powers Nigeria's commercial and industrial sectors — reducing energy costs, improving reliability, and driving sustainable growth across Africa.
                </p>
            </div>
            <div class="flex-1 w-full">
                <img src="{{ asset('images/about-mission.avif') }}" alt="Mission" class="w-full aspect-video object-cover rounded-2xl shadow-sm">
            </div>
        </div>
    </section>

    {{-- TEAM --}}
    <section class="px-10 lg:px-16 max-w-6xl mx-auto py-16 border-t border-gray-100">
        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-8 mb-12">
            <h3 class="text-3xl font-normal text-[#1D1D1D]">Our Management Team</h3>
            <p class="text-gray-600 text-base max-w-md">
                Our skilled team works closely with clients, offering reliable advice, transparent processes, and seamless support for all power needs.
            </p>
        </div>
        <div class="grid sm:grid-cols-3 gap-8">
            <div class="group relative rounded-2xl overflow-hidden aspect-[3/5] bg-gray-200">
                <img src="{{ asset('images/team.avif') }}" alt="Bianca Amede" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black/50 backdrop-blur-md p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                    <p class="font-semibold text-lg text-[#AFEB63]">Bianca Amede</p>
                    <p class="text-sm text-white">CEO & Founder</p>
                </div>
            </div>
            <div class="group relative rounded-2xl overflow-hidden aspect-[3/5] bg-gray-200">
                <img src="{{ asset('images/team.avif') }}" alt="Samuel Orimilade" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black/50 backdrop-blur-md p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                    <p class="font-semibold text-lg text-[#AFEB63]">Samuel Orimilade</p>
                    <p class="text-sm text-white">Chief Technical Officer (CTO)</p>
                </div>
            </div>
            <div class="group relative rounded-2xl overflow-hidden aspect-[3/5] bg-gray-200">
                <img src="{{ asset('images/team.avif') }}" alt="Ayodeji Oluwatobi" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute bottom-0 left-0 right-0 bg-black/50 backdrop-blur-md p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out">
                    <p class="font-semibold text-lg text-[#AFEB63]">Ayodeji Oluwatobi</p>
                    <p class="text-sm text-white">Chief Marketing Officer (CMO)</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative text-center py-20 px-10 lg:px-16 overflow-hidden">
        <img src="{{ asset('images/about-cta-bg.avif') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-[#1D1D1D]/70"></div>
        <div class="relative z-10 max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-normal mb-6 text-white leading-snug">
                Join us on our journey to a cleaner, greener, and more sustainable world.
            </h2>
            <a href="/contact" class="inline-block bg-[#FBD331] hover:bg-[#AFEB63] text-black font-semibold text-base px-8 py-4 rounded-full transition-colors">
                Contact Us
            </a>
        </div>
    </section>

@endsection