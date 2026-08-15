@extends('layouts.app')

@section('title', 'Zee Realty Estate Solar Hub - StormVest Solar Energy')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[500px] md:h-[560px] flex flex-col justify-end px-10 lg:px-16 pb-14 overflow-hidden">
        <img src="{{ asset('images/projects/zee-realty-main.jpg') }}" alt="Zee Realty Estate Solar Hub" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full text-center">
            <h1 class="text-[40px] md:text-[64px] font-semibold tracking-[-2px] leading-[1.2] text-white mb-6">Zee Realty Estate Solar Hub</h1>
            <p class="text-white text-base">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">Completed Project Details</span>
            </p>
        </div>
    </section>

    {{-- PROJECT SUMMARY --}}
    <section class="px-10 lg:px-16 py-20 max-w-6xl mx-auto">
        <h3 class="text-3xl md:text-4xl font-normal max-w-5xl leading-snug text-[#1D1D1D]">
            A Fully Managed Solar Energy System Delivering Clean, Reliable Power Across A Premium Residential Estate In Lagos. Delivered In Partnership With Zee Realty.
        </h3>
    </section>

    {{-- IMAGE + KEY FEATURES --}}
    <section class="px-10 lg:px-16 max-w-6xl mx-auto pb-24 grid md:grid-cols-2 gap-10 items-start">
        {{-- Project image with "view more" pill button --}}
        <div class="relative rounded-2xl overflow-hidden aspect-[4/3.7]">
            <img src="{{ asset('images/projects/zee-realty-main.jpg') }}" alt="Zee Realty Estate Solar Hub" class="w-full h-full object-cover">
            <a href="#" class="absolute bottom-6 right-6 bg-black/60 hover:bg-black/80 backdrop-blur-sm border-2 border-[#FBD331] text-[#FBD331] font-semibold text-base px-6 py-3.5 rounded-full transition-colors">
                Click here to view more
            </a>
        </div>

        {{-- Key features --}}
        <div class="space-y-5">
            <p class="text-xl text-[#1D1D1D]"><strong>Zee Realty Estate Solar Hub | 800 kWp</strong></p>
            <p class="text-lg text-gray-600"><strong class="text-[#1D1D1D]">Project Name:</strong> Zee Realty Estate Solar Hub</p>
            <p class="text-lg text-gray-600"><strong class="text-[#1D1D1D]">Type of Project:</strong> Commercial</p>
            <p class="text-lg text-gray-600"><strong class="text-[#1D1D1D]">Service:</strong> Energy as a Service (Light to the World)</p>
            <p class="text-lg text-gray-600"><strong class="text-[#1D1D1D]">Location:</strong> Lekki, Lagos, Nigeria</p>
            <p class="text-lg text-gray-600"><strong class="text-[#1D1D1D]">Model:</strong> Light to the World — EaaS</p>
            <p class="text-lg text-gray-600"><strong class="text-[#1D1D1D]">Size:</strong> 800 kWp</p>
            <p class="text-lg text-gray-600"><strong class="text-[#1D1D1D]">Status:</strong> Completed</p>
        </div>
    </section>

    {{-- OTHER PROJECTS --}}
    <section class="px-10 lg:px-16 max-w-6xl mx-auto pb-24 pt-32">
        <h2 class="text-4xl md:text-5xl font-bold text-[#1D1D1D] mb-12">Other Projects</h2>
        <div class="grid sm:grid-cols-3 gap-8">
            <a href="/projects/izenergy-joint-epc-delivery" class="group relative rounded-2xl overflow-hidden aspect-[4/5]">
                <img src="{{ asset('images/projects/izenergy.jpg') }}" alt="Izenergy Joint EPC Delivery" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/10 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-7">
                    <h4 class="text-white font-bold text-2xl leading-snug">Izenergy Joint EPC Delivery</h4>
                </div>
            </a>
            <a href="/projects/megaloite-industrial-power-station" class="group relative rounded-2xl overflow-hidden aspect-[4/5]">
                <img src="{{ asset('images/projects/megaloite.jpg') }}" alt="Megaloite Industrial Power Station" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/10 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-7">
                    <h4 class="text-white font-bold text-2xl leading-snug">Megaloite Industrial Power Station</h4>
                </div>
            </a>
            <a href="/projects/fcmb-headquarters-solar-retrofit" class="group relative rounded-2xl overflow-hidden aspect-[4/5]">
                <img src="{{ asset('images/projects/fcmb.jpg') }}" alt="FCMB Headquarters Solar Retrofit" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/10 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-7">
                    <h4 class="text-white font-bold text-2xl leading-snug">FCMB Headquarters Solar Retrofit</h4>
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