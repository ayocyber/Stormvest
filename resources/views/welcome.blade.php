@extends('layouts.app')

@section('title', 'StormVest Solar Energy - Turn-key Solar Infrastructure')

@section('content')

    {{-- HERO --}}
    <section class="relative h-screen min-h-[640px] flex flex-col justify-end px-10 lg:px-16 pb-20 overflow-hidden">
        <img src="{{ asset('images/home-hero.avif') }}" alt="StormVest Solar Energy" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 max-w-4xl">
            <h1 class="text-[48px] md:text-[80px] font-semibold tracking-[-2px] leading-[1.05] text-white mb-6">Putting power in your hands</h1>
            <p class="text-white text-lg max-w-xl">
                Stormvest Solar Energy plans, builds, and operates high value solar infrastructure for Nigeria's institutions and businesses.
            </p>
        </div>
        <a href="#about" class="absolute bottom-10 right-10 lg:right-16 w-16 h-16 rounded-full bg-[#AFEB63] hover:bg-[#FBD331] flex items-center justify-center transition-colors">
            <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#1D1D1D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M6 13l6 6 6-6"/></svg>
        </a>
    </section>

    {{-- ABOUT / STATS --}}
    <section id="about" class="px-10 lg:px-16 py-24 max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row gap-6 md:gap-16 items-start mb-14">
            <div class="flex items-center gap-2 shrink-0 md:w-48">
                <span class="text-[#FBD331] text-lg font-semibold">//</span>
                <span class="text-[#575757] text-lg font-semibold">Our Mission</span>
            </div>
            <h3 class="font-['Montserrat'] text-3xl md:text-4xl font-normal text-[#1D1D1D] leading-snug">
                Our mission at Stormvest is to accelerate Nigeria's transition away from diesel dependency, empowering institutions, investors, and communities to build a more reliable energy future.
            </h3>
        </div>

        <div id="stats-grid" class="grid grid-cols-2 md:grid-cols-4 gap-0 border border-[#E3E3E3] rounded-2xl">
            <div class="stat-card rounded-[19px] border border-[#E3E3E3] opacity-0 scale-95 transition-all duration-700 ease-out bg-[#F5F5F5] p-8 min-h-[420px] md:min-h-[520px] flex flex-col justify-between" data-delay="0">
                <p class="text-[48px] md:text-[64px] font-medium text-[#1D1D1D] leading-none">15MW+</p>
                <div class="flex items-center justify-between pt-4 border-t border-[#E3E3E3]">
                    <span class="text-sm text-[#1D1D1D]">Projected Capacity</span>
                    <span class="text-xs font-semibold text-[#1D1D1D]">(01)</span>
                </div>
            </div>
            <div class="stat-card rounded-[19px] border border-l-0 border-[#E3E3E3] opacity-0 scale-95 transition-all duration-700 ease-out bg-[#0504AA] p-8 min-h-[420px] md:min-h-[520px] flex flex-col justify-between" data-delay="200">
                <p class="text-[48px] md:text-[64px] font-medium text-white leading-none">99.9%</p>
                <div class="flex items-center justify-between pt-4 border-t border-white/20">
                    <span class="text-sm text-white">Uptime Reliability</span>
                    <span class="text-xs font-semibold text-white">(02)</span>
                </div>
            </div>
            <div class="stat-card rounded-[19px] border border-l-0 border-[#E3E3E3] opacity-0 scale-95 transition-all duration-700 ease-out bg-[#F5F5F5] p-8 min-h-[420px] md:min-h-[520px] flex flex-col justify-between" data-delay="400">
                <p class="text-[48px] md:text-[64px] font-medium text-[#1D1D1D] leading-none">24/7</p>
                <div class="flex items-center justify-between pt-4 border-t border-[#E3E3E3]">
                    <span class="text-sm text-[#1D1D1D]">Remote Monitoring</span>
                    <span class="text-xs font-semibold text-[#1D1D1D]">(03)</span>
                </div>
            </div>
            <div class="stat-card rounded-[19px] border border-l-0 border-[#E3E3E3] opacity-0 scale-95 transition-all duration-700 ease-out bg-[#0504AA] p-8 min-h-[420px] md:min-h-[520px] flex flex-col justify-between" data-delay="600">
                <p class="text-[48px] md:text-[64px] font-medium text-white leading-none">25YRS</p>
                <div class="flex items-center justify-between pt-4 border-t border-white/20">
                    <span class="text-sm text-white">Asset Lifespan</span>
                    <span class="text-xs font-semibold text-white">(04)</span>
                </div>
            </div>
        </div>
    </section>

    {{-- MISSION & VISION --}}
    <section class="px-10 lg:px-16 py-16 max-w-6xl mx-auto grid md:grid-cols-2 gap-14 items-center">
        <div>
            <h2 class="text-4xl md:text-5xl font-bold text-[#1D1D1D] mb-6">Putting Power in your hands</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-8">
                Stormvest Solar Energy is a commercial solar infrastructure company under the Stormvest Limited Group. We design, build, and manage scalable solar energy systems for Nigeria's institutional and commercial markets, taking full ownership of a project from design through years of maintenance.
            </p>
            <a href="/about" class="inline-block bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-base px-7 py-3.5 rounded-full transition-colors">
                More About Us ↗
            </a>
        </div>
        <div class="rounded-2xl overflow-hidden aspect-[4/3]">
            <img src="{{ asset('images/about-mission.avif') }}" alt="Stormvest Solar mission" class="w-full h-full object-cover">
        </div>
    </section>

    {{-- FEATURED PROJECTS --}}
    <section class="px-10 lg:px-16 py-16 max-w-6xl mx-auto">
        <div class="flex flex-wrap items-center justify-between gap-6 mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-[#1D1D1D]">Featured Projects</h2>
            <a href="/projects/zee-realty-estate-solar-hub" class="inline-block bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-base px-7 py-3.5 rounded-full transition-colors">
                View all projects ↗
            </a>
        </div>

        <div class="grid sm:grid-cols-2 gap-6">
            <a href="/projects/zee-realty-estate-solar-hub" class="group relative rounded-2xl overflow-hidden aspect-[4/3]">
                <img src="{{ asset('images/projects/zee-realty-main.jpg') }}" alt="Zee Realty Estate Solar Hub" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <h4 class="absolute bottom-6 left-6 text-white text-xl font-semibold">Zee Realty Estate Solar Hub</h4>
            </a>
            <a href="/projects/izenergy-joint-epc-delivery" class="group relative rounded-2xl overflow-hidden aspect-[4/3]">
                <img src="{{ asset('images/projects/izenergy.jpg') }}" alt="Izenergy Joint EPC Delivery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <h4 class="absolute bottom-6 left-6 text-white text-xl font-semibold">Izenergy Joint EPC Delivery</h4>
            </a>
            <a href="/projects/megaloite-industrial-power-station" class="group relative rounded-2xl overflow-hidden aspect-[4/3]">
                <img src="{{ asset('images/projects/megaloite.jpg') }}" alt="Megaloite Industrial Power Station" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <h4 class="absolute bottom-6 left-6 text-white text-xl font-semibold">Megaloite Industrial Power Station</h4>
            </a>
            <a href="/projects/fcmb-headquarters-solar-retrofit" class="group relative rounded-2xl overflow-hidden aspect-[4/3]">
                <img src="{{ asset('images/projects/fcmb.jpg') }}" alt="FCMB Headquarters Solar Retrofit" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <h4 class="absolute bottom-6 left-6 text-white text-xl font-semibold">FCMB Headquarters Solar Retrofit</h4>
            </a>
        </div>
    </section>

    {{-- CORE VALUES --}}
    <section class="relative px-10 lg:px-16 py-16 min-h-[800px] overflow-hidden">
        <img src="{{ asset('images/core-values-bg.webp') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="absolute inset-y-0 left-1/2 w-px bg-white/30 z-10"></div>

        <div class="relative z-10 h-full flex flex-col md:flex-row">
            <div class="md:w-1/2"></div>

            <div class="md:w-1/2 flex flex-col justify-between pt-2 pb-2">
                <h2 class="text-3xl md:text-4xl font-normal text-white md:pl-16">Our Core Values</h2>

                <div class="w-full md:pl-16 space-y-0">
                    <details class="group border-b border-white/20 py-5" open>
                        <summary class="flex items-center justify-between cursor-pointer text-white text-lg font-semibold list-none">
                            Integrity
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#FBD331" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-open:rotate-180 transition-transform shrink-0"><path d="M6 9l6 6 6-6"/></svg>
                        </summary>
                        <p class="text-white/80 text-base mt-3">We deliver what we promise. Every time. No exceptions.</p>
                    </details>
                    <details class="group border-b border-white/20 py-5">
                        <summary class="flex items-center justify-between cursor-pointer text-white text-lg font-semibold list-none">
                            Excellence
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-open:rotate-180 transition-transform shrink-0"><path d="M6 9l6 6 6-6"/></svg>
                        </summary>
                        <p class="text-white/80 text-base mt-3">International standards on every project regardless of size or budget.</p>
                    </details>
                    <details class="group border-b border-white/20 py-5">
                        <summary class="flex items-center justify-between cursor-pointer text-white text-lg font-semibold list-none">
                            Innovation
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-open:rotate-180 transition-transform shrink-0"><path d="M6 9l6 6 6-6"/></svg>
                        </summary>
                        <p class="text-white/80 text-base mt-3">We continuously adopt the best available technology for our clients.</p>
                    </details>
                    <details class="group border-b border-white/20 py-5">
                        <summary class="flex items-center justify-between cursor-pointer text-white text-lg font-semibold list-none">
                            Partnership
                            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-open:rotate-180 transition-transform shrink-0"><path d="M6 9l6 6 6-6"/></svg>
                        </summary>
                        <p class="text-white/80 text-base mt-3">We build long-term relationships — not one-off transactions.</p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    {{-- OUR SERVICES --}}
    <section class="bg-white px-10 lg:px-16 py-24 max-w-6xl mx-auto">
        <h2 class="text-4xl md:text-5xl font-normal text-[#1D1D1D] mb-12">Our Services</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="/services/energy-consulting" class="group relative rounded-2xl bg-[#0504AA] p-8 flex flex-col justify-between min-h-[220px] overflow-hidden">
                <div>
                    <h6 class="text-white font-semibold text-xl mb-2">Energy Consulting.</h6>
                    <p class="text-gray-200 text-sm leading-relaxed">Data-driven roadmap to energy independence, from load audit to bankable ROI.</p>
                </div>
                <div class="relative self-end w-14 h-14 rounded-xl bg-[#AFEB63] group-hover:bg-[#1D1D1D] transition-colors duration-300 flex items-center justify-center mt-6">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#1D1D1D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="group-hover:hidden"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-3.6 10.8c.6.45 1 .9 1.1 1.7h5c.1-.8.5-1.25 1.1-1.7A6 6 0 0 0 12 3z"/></svg>
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#AFEB63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden group-hover:block"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </div>
            </a>
            <a href="/services/epc-project-delivery" class="group relative rounded-2xl bg-[#0504AA] p-8 flex flex-col justify-between min-h-[220px] overflow-hidden">
                <div>
                    <h6 class="text-white font-semibold text-xl mb-2">EPC Project Delivery</h6>
                    <p class="text-gray-200 text-sm leading-relaxed">Full engineering, procurement, and construction delivery from design to commissioning.</p>
                </div>
                <div class="relative self-end w-14 h-14 rounded-xl bg-[#AFEB63] group-hover:bg-[#1D1D1D] transition-colors duration-300 flex items-center justify-center mt-6">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#1D1D1D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="group-hover:hidden"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 0 0 5.4-5.4l-2.8 2.8-2-2z"/></svg>
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#AFEB63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden group-hover:block"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </div>
            </a>
            <a href="/services/battery-storage-bess" class="group relative rounded-2xl bg-[#0504AA] p-8 flex flex-col justify-between min-h-[220px] overflow-hidden">
                <div>
                    <h6 class="text-white font-semibold text-xl mb-2">Battery Storage (BESS)</h6>
                    <p class="text-gray-200 text-sm leading-relaxed">Store, shift, and back up your power to keep operations running when the grid can't.</p>
                </div>
                <div class="relative self-end w-14 h-14 rounded-xl bg-[#AFEB63] group-hover:bg-[#1D1D1D] transition-colors duration-300 flex items-center justify-center mt-6">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#1D1D1D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="group-hover:hidden"><rect x="2" y="7" width="17" height="10" rx="2"/><path d="M22 10v4M6 10v4M10 10v4"/></svg>
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#AFEB63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden group-hover:block"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                </div>
            </a>
            <a href="/services/active-monitoring" class="group relative rounded-2xl bg-[#0504AA] p-8 flex flex-col justify-between min-h-[220px] overflow-hidden">
                <div>
                    <h6 class="text-white font-semibold text-xl mb-2">Active Monitoring</h6>
                    <p class="text-gray-200 text-sm leading-relaxed">24/7 system monitoring and maintenance to guarantee performance over the project lifetime.</p>
                </div>
                <div class="relative self-end w-14 h-14 rounded-xl bg-[#AFEB63] group-hover:bg-[#1D1D1D] transition-colors duration-300 flex items-center justify-center mt-6">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="#1D1D1D" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="group-hover:hidden"><path d="M3 12h4l2-7 4 14 2-7h6"/></svg>
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="#AFEB63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden group-hover:block"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
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

@push('scripts')
<script>
    (function () {
        const grid = document.getElementById('stats-grid');
        if (!grid) return;

        const cards = grid.querySelectorAll('.stat-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    cards.forEach((card) => {
                        const delay = parseInt(card.dataset.delay, 10) || 0;
                        setTimeout(() => {
                            card.classList.remove('opacity-0', 'scale-95');
                            card.classList.add('opacity-100', 'scale-100');
                        }, delay);
                    });
                    observer.disconnect();
                }
            });
        }, { threshold: 0.3 });

        observer.observe(grid);
    })();
</script>
@endpush