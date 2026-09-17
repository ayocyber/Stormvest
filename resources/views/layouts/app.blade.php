<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'StormVest Solar Energy')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite('resources/css/app.css')

    {{-- GSAP + ScrollTrigger (used for the stat-card scroll reveal on the homepage) --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <style>
        #site-header {
            transition: background-color 0.35s ease, backdrop-filter 0.35s ease;
        }
        #site-header.nav-solid {
            background-color: rgba(107, 107, 107, 0.55);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        /* Fade-in-on-scroll utility. Add class="reveal" to any element. */
        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Optional stagger for grids: wrap the grid with class="reveal-group"
           and give each child class="reveal". Add more nth-child rules if a
           grid has more than 4 items. */
        .reveal-group .reveal:nth-child(1) { transition-delay: 0ms; }
        .reveal-group .reveal:nth-child(2) { transition-delay: 100ms; }
        .reveal-group .reveal:nth-child(3) { transition-delay: 200ms; }
        .reveal-group .reveal:nth-child(4) { transition-delay: 300ms; }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-gray-900 antialiased font-sans">

    {{-- NAV: transparent over hero, turns solid/blurred grey and stays fixed on scroll --}}
<header id="site-header" class="fixed top-0 left-0 right-0 z-20 flex items-center justify-between px-6 md:px-40 py-5">
    <a href="/">
        <img src="{{ asset('images/logo.svg') }}" alt="StormVest" class="h-8 w-auto">
    </a>

    <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-white">
        <a href="/" class="{{ request()->is('/') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">About Us</a>
        <a href="/services" class="{{ request()->is('services*') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">Our Services</a>
        <a href="/projects/zee-realty-estate-solar-hub" class="{{ request()->is('projects*') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">Projects</a>
    </nav>

    <a href="/contact" class="hidden md:flex bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-sm px-5 py-2.5 rounded-full items-center gap-1.5 transition-colors">
        Contact
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 17L17 7M17 7H8M17 7v9" />
        </svg>
    </a>

    <button id="mobile-menu-btn" class="md:hidden text-white" aria-label="Toggle menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</header>

<div id="mobile-menu" class="hidden md:hidden fixed top-[72px] left-0 right-0 z-20 bg-[#1D1D1D] flex flex-col items-center gap-6 py-8 text-white text-lg font-medium">
    <a href="/" class="hover:text-[#FBD331]">Home</a>
    <a href="/about" class="hover:text-[#FBD331]">About Us</a>
    <a href="/services" class="hover:text-[#FBD331]">Our Services</a>
    <a href="/projects/zee-realty-estate-solar-hub" class="hover:text-[#FBD331]">Projects</a>
    <a href="/contact" class="bg-[#FBD331] text-black font-semibold px-6 py-2.5 rounded-full">Contact</a>
</div>

    <script>
        (function () {
            const header = document.getElementById('site-header');
            const heroThreshold = 120;

            function updateHeader() {
                header.classList.toggle('nav-solid', window.scrollY > heroThreshold);
            }

            window.addEventListener('scroll', updateHeader, { passive: true });
            updateHeader();
        })();

        document.getElementById('mobile-menu-btn').addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    {{-- Page content swaps via AJAX when navigating between /projects pages --}}
    <main id="page-content" class="transition-opacity duration-300">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-[#0504AA] text-white px-10 lg:px-16 py-16">
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 text-base">
            <div>
                <img src="{{ asset('images/logo.svg') }}" alt="StormVest" class="h-10 w-auto mb-4">
                <p class="text-gray-200">Turn-key solar infrastructure across Africa. Lighting Up the World.</p>
            </div>
            <div>
                <p class="font-semibold text-lg mb-4">Useful Links</p>
                <ul class="space-y-3 text-gray-200">
                    <li><a href="/" class="hover:text-[#FBD331]">Home</a></li>
                    <li><a href="/about" class="hover:text-[#FBD331]">About Us</a></li>
                    <li><a href="/services" class="hover:text-[#FBD331]">Our Services</a></li>
                    <li><a href="/projects/zee-realty-estate-solar-hub" class="hover:text-[#FBD331]">Projects</a></li>
                    <li><a href="/contact" class="hover:text-[#FBD331]">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <p class="font-semibold text-lg mb-4">Contact</p>
                <ul class="space-y-3 text-gray-200">
                    <li>Lagos, Nigeria</li>
                    <li><a href="mailto:info@stormvestsolar.com" class="hover:text-[#FBD331]">info@stormvestsolar.com</a></li>
                    <li><a href="mailto:contact@stormvestsolar.com" class="hover:text-[#FBD331]">contact@stormvestsolar.com</a></li>
                    <li><a href="tel:+2348163783188" class="hover:text-[#FBD331]">+234 816 378 3188</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-white/20 mt-12 pt-8 text-center text-sm text-gray-300">
            © 2026 StormVest Solar. All Rights Reserved.
            <a href="/legal/privacy-policy" class="hover:text-[#FBD331] ml-2">Privacy Policy</a> ·
            <a href="/legal/terms-conditions" class="hover:text-[#FBD331] ml-1">Terms & Conditions</a>
        </div>
    </footer>

    <script src="{{ asset('js/project-nav.js') }}"></script>

    {{-- Fade-in-on-scroll: add class="reveal" to any element on any page.
         Exposed as window.initReveal so it can be re-run after the AJAX
         project-page swaps in project-nav.js (call window.initReveal()
         right after new content is injected into #page-content). --}}
    <script>
        window.initReveal = function () {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target); // fire once per element
                    }
                });
            }, { threshold: 0.15 });

            document.querySelectorAll('.reveal:not(.is-visible)').forEach(el => observer.observe(el));
        };

        document.addEventListener('DOMContentLoaded', window.initReveal);
    </script>

    @stack('scripts')
</body>
</html>