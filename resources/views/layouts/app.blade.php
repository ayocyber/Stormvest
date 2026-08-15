<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'StormVest Solar Energy')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        #site-header {
            transition: background-color 0.35s ease, backdrop-filter 0.35s ease;
        }
        #site-header.nav-solid {
            background-color: rgba(107, 107, 107, 0.55);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-gray-900 antialiased font-sans">

    {{-- NAV: transparent over hero, turns solid/blurred grey and stays fixed on scroll --}}
    <header id="site-header" class="fixed top-0 left-0 right-0 z-20 flex items-center justify-between px-10 lg:px-16 py-8">
        <a href="/">
            <img src="{{ asset('images/logo.svg') }}" alt="StormVest" class="h-10 w-auto">
        </a>
        <nav class="hidden md:flex items-center gap-10 text-base font-medium text-white">
            <a href="/" class="{{ request()->is('/') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">Home</a>
            <a href="/about" class="{{ request()->is('about') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">About Us</a>
<a href="/services" class="{{ request()->is('services*') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">Our Services</a>            <a href="/projects/zee-realty-estate-solar-hub" class="{{ request()->is('projects*') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">Projects</a>
        </nav>
        <a href="/contact" class="bg-[#FBD331] hover:bg-[#1D1D1D] hover:text-white text-black font-semibold text-base px-7 py-3.5 rounded-full flex items-center gap-1 transition-colors">
            Contact ↗
        </a>
    </header>

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
<a href="/services" class="{{ request()->is('services*') ? 'text-[#FBD331]' : 'hover:text-[#FBD331]' }}">Our Services</a>                    <li><a href="/projects/zee-realty-estate-solar-hub" class="hover:text-[#FBD331]">Projects</a></li>
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
    @stack('scripts')
</body>
</html>