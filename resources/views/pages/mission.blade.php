@extends('welcome')

@section('content')

<div class="bg-gray-50 text-gray-700" style="font-family: Arial, sans-serif;">

    <!-- Main Container -->
    <div class="container mx-auto px-6 py-12">

        <!-- Header Section -->
        <header class="text-center mb-12">
            <h1 class="text-5xl font-bold text-[#4a70bc]">Empowering Your Initiatives</h1>
            <p class="mt-4 text-xl text-gray-600">Our experienced team is here to guide you every step of the way, helping you achieve success with confidence and clarity.</p>
        </header>

        <!-- Main Section -->
        <main class="space-y-12">
            <!-- Professional Guidance Section -->
            <section class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#4a70bc]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v2a2 2 0 002 2h2a2 2 0 002-2v-2m-6-4h6m2 4H7a4 4 0 01-4-4V7a4 4 0 014-4h10a4 4 0 014 4v6a4 4 0 01-4 4z" />
                    </svg>
                    Expert Guidance
                </h2>
                <p class="mt-4 text-gray-600 leading-relaxed">
                    From funding applications to project launches, our professional team will guide you from start to finish. We offer tailored advice and help you overcome challenges, ensuring you stay aligned with your goals.
                </p>
            </section>

            <!-- Application Process Section -->
            <section class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#4a70bc]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v10l4-4h6" />
                    </svg>
                    Seamless Application Process
                </h2>
                <p class="mt-4 text-gray-600 leading-relaxed">
                    Our process is designed to be transparent and straightforward. Submit your application, receive feedback, and work with us to refine your vision, ensuring all the right steps are in place for success.
                </p>
            </section>

            <!-- Dedicated Team Section -->
            <section class="bg-white rounded-lg shadow-lg p-8 transition-transform hover:scale-105">
                <h2 class="text-3xl font-bold text-gray-800 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#4a70bc]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2m-6 0H7a2 2 0 01-2-2v-6a2 2 0 012-2h6m4 0V5a2 2 0 00-2-2H9a2 2 0 00-2 2v3" />
                    </svg>
                    A Dedicated, Diverse Team
                </h2>
                <p class="mt-4 text-gray-600 leading-relaxed">
                    Our team brings together professionals from various fields, all focused on helping you succeed. We understand your unique needs and provide the resources and support necessary to bring your initiatives to life.
                </p>
            </section>
        </main>

        <!-- Divider -->
        <div class="my-12 border-t border-gray-300"></div>

        <!-- Footer Section -->
        <footer class="text-center mt-12">
            <p class="text-gray-600">Have any questions? Reach out to us at <a href="mailto:info@example.com" class="text-blue-600 hover:underline">info@example.com</a></p>
        </footer>
    </div>

</div>

@endsection
