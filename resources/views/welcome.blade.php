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
        <header class="flex justify-between items-center py-4 relative bg-[#3f1a61]">

            <a href="/" class="font-bold p-2 text-white text-2xl">UN-AID</a>

            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="block md:hidden text-[#4a70bc] focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            
            <!-- Navigation Menu -->
            <nav id="nav-menu" class="md:flex md:space-x-6 flex-col md:flex-row h-24 bg-[#ffffff] lg:h-full fixed md:static inset-0 md:bg-transparent top-12 right-0 w-full md:w-auto p-4 md:p-0 shadow md:shadow-none z-50">
                <a href="/services" class="inline-block p-4 text-white hover:text-[#ffb300] uppercase">Our Services</a>
                <a href="/about" class="inline-block p-4 text-white hover:text-[#ffb300] uppercase">About Us</a>
                <a href="/contact" class="inline-block p-4 text-white hover:text-[#ffb300] uppercase">Register with Us</a>

                <!-- Search Icon -->
                <a href="#" class="inline-block p-4 text-white hover:text-[#ffb300]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z"></path>
                    </svg>
                </a>
            </nav>

                                                
        </header>

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer Section -->
        <footer class="bg-[#3f1a61] text-white">
            <div class="container mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-center md:text-left mb-4 md:mb-0">
                        <a href="/" class="text-white text-2xl font-bold">UN-AID</a>
                    </div>

                    <div class="flex flex-col md:flex-row items-center">
                        
                        <a href="https://www.facebook.com/UN-AID" class="mx-2 text-blue-500" target="_blank" rel="noopener noreferrer">
                            <font-awesome-icon :icon="['fab', 'facebook-f']" class="text-xl sm:text-2xl transition duration-300" />
                        </a>
                        <a href="https://twitter.com/UN-AID" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <font-awesome-icon :icon="['fab', 'twitter']" class="text-xl sm:text-2xl transition duration-300" />
                        </a>
                        <a href="https://www.youtube.com/channel/UN-AID" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <font-awesome-icon :icon="['fab', 'youtube']" class="text-xl sm:text-2xl transition duration-300" />
                        </a>
                        <a href="https://www.linkedin.com/company/UN-AID" class="mx-2 text-blue-500" target="_blank" rel="noopener noreferrer">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.786 19.785h-3.82v-5.077c0-1.211-0.023-2.779-1.691-2.779-1.686 0-1.945 1.318-1.945 2.686v5.17H9.079V8.415h3.664v1.578h0.048c0.53-1.001 1.824-2.05 3.766-2.05 4.016 0 4.752 2.644 4.752 6.083v5.44zM5.467 6.738c-1.239 0-2.25 1.003-2.25 2.25s1.011 2.25 2.25 2.25c1.238 0 2.25-1.003 2.25-2.25s-1.012-2.25-2.25-2.25zM6.967 19.785H4.002V8.415h2.965V19.785zM21.445 1.035H2.555C1.14 1.035 0 2.174 0 3.59v16.82c0 1.416 1.14 2.555 2.555 2.555h18.89c1.416 0 2.555-1.139 2.555-2.555V3.59c0-1.416-1.139-2.555-2.555-2.555z"/>
                            </svg>
                        </a>
                        <a href="https://www.flickr.com/photos/UN-AID" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.223 8.592a4.155 4.155 0 1 1-8.308 0 4.155 4.155 0 0 1 8.308 0zM20.232 12.546a3.385 3.385 0 1 0-6.769 0 3.385 3.385 0 0 0 6.769 0zM12.075 9.187a4.17 4.17 0 0 0-4.075 4.159 4.17 4.17 0 0 0 4.075 4.159 4.17 4.17 0 0 0 4.075-4.159 4.17 4.17 0 0 0-4.075-4.159zM16.769 12.546a3.385 3.385 0 1 1-6.769 0 3.385 3.385 0 0 1 6.769 0zM5.619 8.598a4.155 4.155 0 1 1 8.308 0 4.155 4.155 0 0 1-8.308 0z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/UN-AID" class="mx-2" target="_blank" rel="noopener noreferrer">
                            <font-awesome-icon :icon="['fab', 'instagram']" class="text-xl sm:text-2xl transition duration-300" />
                        </a>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <p>&copy; 2024 United Nations Nairobi-AID. All rights reserved.</p>
                </div>
                <div class="text-center mt-2">
                    <a href="/privacy-policy" class="text-white hover:text-[#ffb300]">Privacy Policy</a> |
                    <a href="/terms-of-service" class="text-white hover:text-[#ffb300]">Terms of Service</a> |
                    <a href="/contact-us" class="text-white hover:text-[#ffb300]">Contact Us</a>
                </div>
            </div>
        </footer>

    </div>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const navMenu = document.getElementById('nav-menu');
            navMenu.classList.toggle('hidden');
        });

        // Close menu on link click
        document.querySelectorAll('#nav-menu a').forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('nav-menu').classList.add('hidden');
            });
        });
    </script>

</body>

