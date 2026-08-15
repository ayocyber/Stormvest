@extends('layouts.app')

@section('title', 'Contact Us - StormVest Solar Energy')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[500px] md:h-[560px] flex flex-col justify-end px-10 lg:px-16 pb-14 overflow-hidden">
        <img src="{{ asset('images/contact-hero.webp') }}" alt="Contact StormVest Solar" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-6xl mx-auto w-full text-center">
            <h1 class="text-[40px] md:text-[64px] font-semibold tracking-[-2px] leading-[1.2] text-white mb-6">Contact Us</h1>
            <p class="text-white text-base">
                <a href="/" class="hover:text-[#FBD331]">Home</a> / <span class="text-[#AFEB63]">Contact</span>
            </p>
        </div>
    </section>

    {{-- CONTACT --}}
    <section class="px-10 lg:px-16 py-20 max-w-6xl mx-auto">
        <div class="max-w-2xl mb-14">
            <div class="flex items-center gap-2 mb-4">
                <span class="text-[#AFEB63] text-lg font-semibold">//</span>
                <span class="text-[#575757] text-lg font-semibold">Contact Us</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-[#1D1D1D] mb-4">Let's power your next project</h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                Contact our experienced team today and let us help you achieve your power goals with confidence and clarity.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-14">
            {{-- Reach Out --}}
            <div class="bg-[#F5F5F5] rounded-2xl p-10">
                <h4 class="text-2xl font-semibold text-[#1D1D1D] mb-8">Reach Out</h4>
                <div class="space-y-5">
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-md bg-[#0504AA] flex items-center justify-center shrink-0">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#FBD331" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-7-6.1-7-11a7 7 0 0 1 14 0c0 4.9-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
                        </div>
                        <p class="text-lg text-[#1D1D1D]">Lagos, Nigeria</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-md bg-[#0504AA] flex items-center justify-center shrink-0">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#FBD331" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.99.36 1.96.68 2.89a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.19-1.25a2 2 0 0 1 2.11-.45c.93.32 1.9.55 2.89.68A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <a href="tel:+2348163783188" class="text-lg text-[#1D1D1D] hover:text-[#0504AA]">+234 816 378 3188</a>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-md bg-[#0504AA] flex items-center justify-center shrink-0">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#FBD331" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
                        </div>
                        <a href="mailto:info@stormvestsolar.com" class="text-lg text-[#1D1D1D] hover:text-[#0504AA]">info@stormvestsolar.com</a>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-md bg-[#0504AA] flex items-center justify-center shrink-0">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#FBD331" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 6-10 7L2 6"/></svg>
                        </div>
                        <a href="mailto:contact@stormvestsolar.com" class="text-lg text-[#1D1D1D] hover:text-[#0504AA]">contact@stormvestsolar.com</a>
                    </div>
                </div>
            </div>

            {{-- Form --}}
            <div>
                <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="bg-[#F5F5F5] rounded-2xl p-10 space-y-5">
                    @csrf
                    <div>
                        <label class="block text-base font-medium text-[#1D1D1D] mb-2">Name*</label>
                        <input type="text" name="name" required placeholder="Enter your name" class="w-full rounded-xl border border-gray-200 bg-white px-5 py-3.5 text-base focus:outline-none focus:border-[#0504AA]">
                    </div>
                    <div>
                        <label class="block text-base font-medium text-[#1D1D1D] mb-2">Phone Number*</label>
                        <input type="tel" name="phone" required placeholder="Enter your number" class="w-full rounded-xl border border-gray-200 bg-white px-5 py-3.5 text-base focus:outline-none focus:border-[#0504AA]">
                    </div>
                    <div>
                        <label class="block text-base font-medium text-[#1D1D1D] mb-2">Email*</label>
                        <input type="email" name="email" required placeholder="Enter your email" class="w-full rounded-xl border border-gray-200 bg-white px-5 py-3.5 text-base focus:outline-none focus:border-[#0504AA]">
                    </div>
                    <div>
                        <label class="block text-base font-medium text-[#1D1D1D] mb-2">Message</label>
                        <textarea name="message" required placeholder="Write your message" rows="4" class="w-full rounded-xl border border-gray-200 bg-white px-5 py-3.5 text-base focus:outline-none focus:border-[#0504AA]"></textarea>
                    </div>
                </form>

                <button type="submit" form="contact-form" class="w-full bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-base px-7 py-4 rounded-full mt-8 transition-colors flex items-center justify-center gap-2">
                    Submit Now
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
                </button>
            </div>
        </div>

        {{-- WhatsApp CTA --}}
        <div class="mt-16 bg-[#F5F5F5] rounded-2xl p-10 text-center">
            <h4 class="text-xl font-semibold text-[#1D1D1D] mb-6">You can also reach us directly on WhatsApp</h4>
            <a href="https://wa.me/2348163783188" target="_blank" class="w-full max-w-xl mx-auto inline-flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-base px-7 py-4 rounded-full transition-colors">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38a9.9 9.9 0 0 0 4.74 1.21h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2Zm5.8 14.03c-.24.68-1.4 1.32-1.93 1.4-.5.08-1.13.11-1.83-.11-.42-.13-.96-.31-1.65-.6-2.9-1.25-4.79-4.16-4.94-4.35-.14-.19-1.18-1.57-1.18-3 0-1.42.75-2.12 1.01-2.41.27-.29.58-.36.78-.36.19 0 .39 0 .56.01.18.01.42-.07.65.5.24.58.82 2 .89 2.15.07.15.12.32.02.51-.1.19-.15.31-.29.48-.15.17-.31.38-.44.51-.15.15-.3.31-.13.6.17.29.75 1.24 1.62 2.01 1.11.99 2.05 1.3 2.34 1.45.29.15.46.13.63-.08.17-.21.72-.84.92-1.13.19-.29.39-.24.65-.14.27.1 1.7.8 1.99.95.29.14.48.21.55.33.07.12.07.68-.17 1.36Z"/></svg>
                Send a message
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