<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Nations Nairobi-AID</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#ebe9ef]" style="font-family: Helvetica, Arial, sans-serif">

    <!-- Container for the whole content -->
    <div class="container mx-auto">

        <!-- Header Section -->
        <header class="flex flex-col md:flex-row justify-between items-center bg-[#3f1a61] p-4 relative">

            <!-- Logo/Brand Name -->
            <a href="/" class="font-bold text-white text-2xl mb-4 md:mb-0">UN-AID</a>
        
            <!-- Navigation Menu -->
            <nav class="flex flex-row lg:h-16 text-sm lg:text-base md:flex-row space-x-6 md:items-center w-full md:w-auto">
                <a href="{{ route('services') }}" class="block md:inline-block p-2 text-white hover:text-[#ffb300] uppercase {{ request()->routeIs('services') ? 'text-[#ffb300]' : '' }}">Our Services</a>
                <a href="{{ route('about') }}" class="block md:inline-block p-2 text-white hover:text-[#ffb300] uppercase {{ request()->routeIs('about') ? 'text-[#ffb300]' : '' }}">About Us</a>
                <a href="{{ route('register') }}" class="block md:inline-block p-2 text-white hover:text-[#ffb300] uppercase {{ request()->routeIs('register') ? 'text-[#ffb300]' : '' }}">Register with Us</a>
                                        
                <!-- Search Icon -->
                <a href="#" class="block md:inline-block p-2 text-white hover:text-[#ffb300] mt-1 md:mt-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z"></path>
                    </svg>
                </a>
            </nav>
        
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        </header>
                <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer Section -->
        <footer class="bg-[#3f1a61] text-white p-8">
            <div class="container mx-auto text-center lg:flex lg:justify-between md:text-left">
                <!-- Footer Top Section -->
                <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                    <!-- Logo -->
                    <div class="mb-4 md:mb-0">
                        <a href="/" class="text-white text-3xl font-bold">UN-AID</a>
                    </div>
        
                </div>
        
                <!-- Footer Bottom Section -->
                <div class="text-gray-300 mb-6">
                    <p>&copy; 2024 United Nations Nairobi-AID. All rights reserved.</p>
                </div>
        
                <!-- Footer Links -->
                <div class="space-y-2 md:space-y-0 md:flex md:space-x-6 text-sm">
                    <a href="/privacy-policy" class="text-white hover:text-[#ffb300]">Privacy Policy</a>
                    <a href="/terms-of-service" class="text-white hover:text-[#ffb300]">Terms of Service</a>
                    <a href="/contact-us" class="text-white hover:text-[#ffb300]">Contact Us</a>
                </div>
            </div>
        </footer>
        
    </div>

</body>

</html>
