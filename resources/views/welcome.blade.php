@extends('layouts.app')

@section('title', 'StormVest Solar Energy - Turn-key Solar Infrastructure')

@section('content')

{{-- HERO --}}
<section class="relative h-screen min-h-[640px] flex flex-col justify-end px-6 md:px-40 pb-16 overflow-hidden">
    <img src="{{ asset('images/home-hero.avif') }}" alt="StormVest Solar Energy" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 w-full flex items-end justify-between gap-8">
        <div class="max-w-4xl">
            <h1 class="text-[30px] md:text-[50px] font-semibold tracking-[-2px] leading-[1.2] text-white mb-4">
                <span class="split-text">Putting power in</span><br class="hidden md:block"><span class="split-text">your hands</span>
            </h1>
            <p class="text-white text-lg max-w-xl">
                Stormvest Solar Energy plans, builds, and operates high value solar infrastructure for Nigeria's institutions and businesses.
            </p>
        </div>

       <a href="#about" class="group shrink-0 w-24 h-24 rounded-full bg-[#FBD331] hover:bg-[#0504AA] flex items-center justify-center transition-colors overflow-hidden">
            <img src="{{ asset('images/arrow_clean.png') }}" alt="Scroll down" class="w-10 h-10 transition-transform duration-300 group-hover:rotate-135">
        </a>
    </div>
</section>


{{-- ABOUT / STATS --}}
<section id="about" class="px-6 md:px-16 pt-20 pb-12 max-w-6xl mx-auto">
    <div class="flex flex-col md:flex-row gap-6 md:gap-16 items-start mb-4">
        <div class="flex items-center gap-2 shrink-0 md:w-48">
            <span class="text-[#FBD331] text-lg font-semibold">//</span>
            <span class="text-[#575757] text-lg font-semibold">Our Mission</span>
        </div>
        <h3 class="font-normal text-[26px] md:text-[28px] tracking-[-0.5px] leading-[1.4] text-[#1D1D1D]">
            Our mission at Stormvest is to accelerate Nigeria's transition away from diesel dependency, empowering institutions, investors, and communities to build a more reliable energy future.
        </h3>
    </div>

    {{-- Scroll-driver wrapper: Height set to 350vh so you have enough scroll room to sequence cards coming up from the bottom --}}
    <div id="stats-scroll-driver" class="relative" style="height: 350vh;">
        <div id="stats-sticky" class="sticky top-0 h-screen flex items-center overflow-hidden">
            <div id="stats-grid" class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0">
                
                {{-- Card 1: Starts visible (translateY 0) --}}
                <div class="stat-card rounded-[19px] border border-[#E3E3E3] bg-[#F5F5F5] p-8 min-h-[300px] flex flex-col justify-between shadow-sm transition-transform duration-500 ease-out" style="transform: translateY(0);">
                    <p class="text-[38px] md:text-[50px] font-medium text-[#1D1D1D] leading-none">15MW+</p>
                    <div class="flex items-center justify-between pt-4 border-t border-[#E3E3E3]">
                        <span class="text-sm text-[#1D1D1D]">Projected Capacity</span>
                        <span class="text-xs font-semibold text-[#1D1D1D]">(01)</span>
                    </div>
                </div>

                {{-- Card 2: Starts hidden way down below (translateY 150%) --}}
                <div class="stat-card rounded-[19px] border border-[#E3E3E3] bg-[#0504AA] p-8 min-h-[300px] flex flex-col justify-between shadow-sm transition-transform duration-500 ease-out" style="transform: translateY(150%);">
                    <p class="text-[48px] md:text-[64px] font-medium text-[#FBD331] leading-none">99.9%</p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                        <span class="text-sm text-[#FBD331]">Uptime Reliability</span>
                        <span class="text-xs font-semibold text-[#FBD331]">(02)</span>
                    </div>
                </div>

                {{-- Card 3: Starts hidden way down below --}}
                <div class="stat-card rounded-[19px] border border-[#E3E3E3] bg-[#F5F5F5] p-8 min-h-[300px] flex flex-col justify-between shadow-sm transition-transform duration-500 ease-out" style="transform: translateY(150%);">
                    <p class="text-[48px] md:text-[64px] font-medium text-[#1D1D1D] leading-none">24/7</p>
                    <div class="flex items-center justify-between pt-4 border-t border-[#E3E3E3]">
                        <span class="text-sm text-[#1D1D1D]">Remote Monitoring</span>
                        <span class="text-xs font-semibold text-[#1D1D1D]">(03)</span>
                    </div>
                </div>

                {{-- Card 4: Starts hidden way down below --}}
                <div class="stat-card rounded-[19px] border border-[#E3E3E3] bg-[#0504AA] p-8 min-h-[300px] flex flex-col justify-between shadow-sm transition-transform duration-500 ease-out" style="transform: translateY(150%);">
                    <p class="text-[48px] md:text-[64px] font-medium text-[#FBD331] leading-none">25YRS</p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/20">
                        <span class="text-sm text-[#FBD331]">Asset Lifespan</span>
                        <span class="text-xs font-semibold text-[#FBD331]">(04)</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- MISSION & VISION --}}
<section class="px-6 md:px-16 py-12 max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div>
        <h2 class="text-3xl md:text-4xl text-[#1D1D1D] mb-4">Putting Power in your hands</h2>
        <p class="text-md text-gray-600 leading-relaxed mb-6">
            Stormvest Solar Energy is a commercial solar infrastructure company under the Stormvest Limited Group. We design, build, and manage scalable solar energy systems for Nigeria's institutional and commercial markets, taking full ownership of a project from design through years of maintenance.
        </p>
        <a href="/about" class="inline-flex items-center gap-2 bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-base px-7 py-3.5 rounded-full transition-colors">
            More About Us <i class="bi bi-arrow-up-right text-sm"></i>
        </a>
    </div>
    <div class="rounded-2xl overflow-hidden aspect-[4/3] shadow-md">
        <img src="{{ asset('images/about-mission.avif') }}" alt="Stormvest Solar mission" class="w-full h-full object-cover">
    </div>
</section>

{{-- FEATURED PROJECTS --}}
<section class="bg-[#EAF1FA] py-14">
    <div class="px-6 md:px-16 max-w-6xl mx-auto">
        <div class="flex flex-wrap items-center justify-between gap-6 mb-8">
            <h2 class="text-3xl font-medium text-[#1D1D1D]">Featured Projects</h2>
            <a href="/projects/zee-realty-estate-solar-hub" class="inline-flex items-center gap-1.5 bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-sm px-6 py-3 rounded-full transition-colors">
                View all projects <i class="bi bi-arrow-up-right text-sm"></i>
            </a>
        </div>

        <div class="grid sm:grid-cols-2 gap-5">
            <a href="/projects/zee-realty-estate-solar-hub" class="group relative rounded-2xl overflow-hidden aspect-[16/10] shadow-sm">
                <img src="{{ asset('images/projects/zee-realty-main.jpg') }}" alt="Zee Realty Estate Solar Hub" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <h4 class="absolute bottom-5 left-5 text-white text-[16px] font-semibold group-hover:text-[22px] group-hover:text-[#FBD331] transition-all duration-300">Zee Realty Estate Solar Hub</h4>
            </a>
            <a href="/projects/izenergy-joint-epc-delivery" class="group relative rounded-2xl overflow-hidden aspect-[16/10] shadow-sm">
                <img src="{{ asset('images/projects/izenergy.jpg') }}" alt="Izenergy Joint EPC Delivery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <h4 class="absolute bottom-5 left-5 text-white text-[16px] font-semibold group-hover:text-[22px] group-hover:text-[#FBD331] transition-all duration-300">Izenergy Joint EPC Delivery</h4>
            </a>
            <a href="/projects/megaloite-industrial-power-station" class="group relative rounded-2xl overflow-hidden aspect-[16/10] shadow-sm">
                <img src="{{ asset('images/projects/megaloite.jpg') }}" alt="Megaloite Industrial Power Station" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <h4 class="absolute bottom-5 left-5 text-white text-[16px] font-semibold group-hover:text-[22px] group-hover:text-[#FBD331] transition-all duration-300">Megaloite Industrial Power Station</h4>
            </a>
            <a href="/projects/fcmb-headquarters-solar-retrofit" class="group relative rounded-2xl overflow-hidden aspect-[16/10] shadow-sm">
                <img src="{{ asset('images/projects/fcmb.jpg') }}" alt="FCMB Headquarters Solar Retrofit" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                <h4 class="absolute bottom-5 left-5 text-white text-[16px] font-semibold group-hover:text-[22px] group-hover:text-[#FBD331] transition-all duration-300">FCMB Headquarters Solar Retrofit</h4>
            </a>
        </div>
    </div>
</section>

{{-- CORE VALUES --}}
<section class="relative px-6 md:px-16 py-16 min-h-[700px] overflow-hidden flex items-center">
    <img src="{{ asset('images/core-values-bg.webp') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="absolute inset-y-0 left-1/2 w-px bg-white/20 z-10 hidden md:block"></div>

    <div class="relative z-10 w-full max-w-6xl mx-auto flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h2 class="text-3xl md:text-4xl font-normal text-white">Our Core Values</h2>
        </div>

        <div class="md:w-1/2 w-full md:pl-12 space-y-2">
            <details class="py-3 border-b border-white/10" open>
                <summary class="flex items-center justify-between cursor-pointer text-white text-lg font-semibold list-none">
                    Integrity
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#FBD331" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300"><path d="M6 9l6 6 6-6"/></svg>
                </summary>
                <p class="text-white/80 text-base mt-2">We deliver what we promise. Every time. No exceptions.</p>
            </details>
            <details class="py-3 border-b border-white/10">
                <summary class="flex items-center justify-between cursor-pointer text-white text-lg font-semibold list-none">
                    Excellence
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300"><path d="M6 9l6 6 6-6"/></svg>
                </summary>
                <p class="text-white/80 text-base mt-2">International standards on every project regardless of size or budget.</p>
            </details>
            <details class="py-3 border-b border-white/10">
                <summary class="flex items-center justify-between cursor-pointer text-white text-lg font-semibold list-none">
                    Innovation
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300"><path d="M6 9l6 6 6-6"/></svg>
                </summary>
                <p class="text-white/80 text-base mt-2">We continuously adopt the best available technology for our clients.</p>
            </details>
            <details class="py-3">
                <summary class="flex items-center justify-between cursor-pointer text-white text-lg font-semibold list-none">
                    Partnership
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300"><path d="M6 9l6 6 6-6"/></svg>
                </summary>
                <p class="text-white/80 text-base mt-2">We build long-term relationships — not one-off transactions.</p>
            </details>
        </div>
    </div>
</section>

{{-- SERVICES --}}
<section class="bg-white px-6 md:px-16 py-20 max-w-6xl mx-auto">
    <h2 class="text-3xl md:text-4xl font-normal text-[#1D1D1D] mb-10">Our Services</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="/services/energy-consulting" class="group relative rounded-2xl bg-[#0504AA] p-6 flex flex-col justify-between aspect-square overflow-hidden shadow-sm">
            <div>
                <h6 class="text-white font-semibold text-lg mb-2 leading-snug">Energy Consulting</h6>
                <p class="text-gray-200 text-xs leading-relaxed">Data-driven roadmap to energy independence</p>
            </div>
            <div class="relative self-end w-12 h-12 rounded-xl bg-[#FBD331] group-hover:bg-[#1D1D1D] transition-colors duration-300 flex items-center justify-center mt-4 shrink-0">
                <i class="bi bi-hand-index-thumb text-[#1D1D1D] text-xl group-hover:hidden"></i>
                <i class="bi bi-arrow-right text-[#FBD331] text-xl hidden group-hover:block"></i>
            </div>
        </a>
        <a href="/services/epc-project-delivery" class="group relative rounded-2xl bg-[#0504AA] p-6 flex flex-col justify-between aspect-square overflow-hidden shadow-sm">
            <div>
                <h6 class="text-white font-semibold text-lg mb-2 leading-snug">EPC Project Delivery</h6>
                <p class="text-gray-200 text-xs leading-relaxed">Turn-key execution from blueprint to grid connection.</p>
            </div>
            <div class="relative self-end w-12 h-12 rounded-xl bg-[#FBD331] group-hover:bg-[#1D1D1D] transition-colors duration-300 flex items-center justify-center mt-4 shrink-0">
                <i class="bi bi-hand-thumbs-up text-[#1D1D1D] text-xl group-hover:hidden"></i>
                <i class="bi bi-arrow-right text-[#FBD331] text-xl hidden group-hover:block"></i>
            </div>
        </a>
        <a href="/services/battery-storage-bess" class="group relative rounded-2xl bg-[#0504AA] p-6 flex flex-col justify-between aspect-square overflow-hidden shadow-sm">
            <div>
                <h6 class="text-white font-semibold text-lg mb-2 leading-snug">Battery Storage (BESS)</h6>
                <p class="text-gray-200 text-xs leading-relaxed">Reliable energy buffer for continuous business uptime.</p>
            </div>
            <div class="relative self-end w-12 h-12 rounded-xl bg-[#FBD331] group-hover:bg-[#1D1D1D] transition-colors duration-300 flex items-center justify-center mt-4 shrink-0">
                <i class="bi bi-graph-up-arrow text-[#1D1D1D] text-xl group-hover:hidden"></i>
                <i class="bi bi-arrow-right text-[#FBD331] text-xl hidden group-hover:block"></i>
            </div>
        </a>
        <a href="/services/active-monitoring" class="group relative rounded-2xl bg-[#0504AA] p-6 flex flex-col justify-between aspect-square overflow-hidden shadow-sm">
            <div>
                <h6 class="text-white font-semibold text-lg mb-2 leading-snug">Active Monitoring</h6>
                <p class="text-gray-200 text-xs leading-relaxed">24/7 telemetry tracking performance and preventative care.</p>
            </div>
            <div class="relative self-end w-12 h-12 rounded-xl bg-[#FBD331] group-hover:bg-[#1D1D1D] transition-colors duration-300 flex items-center justify-center mt-4 shrink-0">
                <i class="bi bi-house-check text-[#1D1D1D] text-xl group-hover:hidden"></i>
                <i class="bi bi-arrow-right text-[#FBD331] text-xl hidden group-hover:block"></i>
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

@push('scripts')
<script>
    (function () {
        const driver = document.getElementById('stats-scroll-driver');
        if (!driver) return;

        const cards = document.querySelectorAll('#stats-grid .stat-card');
        const totalCards = cards.length;
        let revealedCount = 1;

        function revealUpTo(count) {
            cards.forEach((card, i) => {
                if (i < count) {
                    card.style.transform = 'translateY(0)';
                } else {
                    card.style.transform = 'translateY(150%)';
                }
            });
        }

        function onScroll() {
            const rect = driver.getBoundingClientRect();
            const driverHeight = driver.offsetHeight;
            const viewportHeight = window.innerHeight;

            const scrolled = -rect.top;
            const scrollableDistance = driverHeight - viewportHeight;
            let progress = scrollableDistance > 0 ? scrolled / scrollableDistance : 0;
            progress = Math.min(Math.max(progress, 0), 1);

            let targetCount = Math.min(
                totalCards,
                Math.floor(progress * totalCards) + 1
            );
            targetCount = Math.max(1, targetCount);

            if (targetCount !== revealedCount) {
                revealedCount = targetCount;
                revealUpTo(revealedCount);
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();
</script>
@endpush