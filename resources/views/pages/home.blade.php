@extends('welcome')

@section('content')
    <style>
        /* Add your CSS styles here */
        .hero-image {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.7;
            filter: brightness(0.7); /* Optional: adds a slight darkening effect */
        }
    </style>

    <div class="w-full">
        <div class="relative bg-gray-900 text-[#fefeff] h-screen flex items-center justify-center">
            <img id="heroImage" class="hero-image" src="{{ asset('images/s1.jpg') }}" alt="Hero Background">
            <div class="relative z-10 text-center">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 leading-tight">
                    Empowering Communities <br class="hidden md:inline"> Through Sustainable <br class="hidden md:inline"> Growth
                </h1>
            </div>
        </div>

        <div class="text-[#436bb9] text-4xl sm:text-5xl lg:text-6xl mt-16 font-bold m-8">
            <h1>Empowering <br> Communities</h1>
        </div>

        <div class="flex flex-col md:flex-row mt-8 justify-between space-y-8 md:space-y-0 md:space-x-6 m-8">
            <div class="md:w-1/3 w-full p-4 rounded-lg">
                <img src="{{ asset('images/s14.jpg') }}" alt="Empowerment Service" class="w-full h-64 md:h-96 object-cover rounded-lg mb-4">
                <h1 class="underline font-semibold text-xl">Foundation support</h1>
                <p class="leading-loose mt-2">Our foundational service is designed to provide essential support to emerging businesses in Africa. We focus on cultivating local talent and resources to foster sustainable growth and innovation.</p>
            </div>

            <div class="md:w-1/3 w-full p-4 rounded-lg">
                <img src="{{ asset('images/s16.jpg') }}" alt="Empowerment Service" class="w-full h-64 md:h-96 object-cover rounded-lg mb-4">
                <h1 class="underline font-semibold text-xl">Growth Acceleration</h1>
                <p class="leading-loose mt-2">This service offers strategic guidance and resources to help businesses scale effectively. We aim to unlock potential and boost market presence, ensuring that local enterprises thrive in a competitive economy.</p>
            </div>

            <div class="md:w-1/3 w-full p-4 rounded-lg">
                <img src="{{ asset('images/s10.jpg') }}" alt="Empowerment Service" class="w-full h-64 md:h-96 object-cover rounded-lg mb-4">
                <h1 class="underline font-semibold text-xl">Impact Amplification</h1>
                <p class="leading-loose mt-2">Our premier service is all about creating significant impact in communities. We collaborate with businesses to amplify their influence and drive positive change, focusing on long-term sustainability and innovation.</p>
            </div>
        </div>

        <div class="flow-root m-8">
            <!-- Image section -->
            <div class="w-full md:w-1/2 float-none md:float-left mt-16">
                <img src="{{ asset('images/s1.jpg') }}" alt="Mission Image" class="h-64 md:h-screen w-full object-cover rounded-lg">
            </div>

            <!-- Text section -->
            <div class="w-full md:w-1/3 float-none md:float-right mt-8 md:mt-24 text-center md:text-left px-4 md:px-0">
                <h1 class="text-[#4a70bc] text-6xl sm:text-5xl md:text-6xl font-bold leading-tight">
                    Discover <br class="hidden md:inline"> the <br class="hidden md:inline"> essence of <br class="hidden md:inline"> our <br class="hidden md:inline"> mission
                </h1>
                <p class="pt-4 pb-6 leading-loose">
                    We are driven by a vision to transform <br>
                    lives across Africa, nurturing local <br>
                    enterprises and sparking innovation. <br>
                    Our journey is fueled by creativity, <br>
                    commitment, and the belief that your <br>
                    story can ignite change. Join us in our <br>
                    quest to elevate communities and <br>
                    empower economies.
                </p>
                <a href="/mission" class="bg-[#000000] text-[#ffff] p-4 md:p-6 rounded-full w-36 md:w-44">
                    LEARN MORE
                </a>
            </div>
        </div>

        <div class="flex flex-col justify-between md:flex-row m-8">
            <!-- Text section -->
            <div class="lg:w-1/3 md:text-left text-center w-full px-4 md:px-0 mr-6">
                <h1 class="text-[#436bb9] text-4xl sm:text-5xl lg:text-6xl mb-8 mt-12 md:mt-24 font-bold leading-tight">
                    Join Our <br> mission
                </h1>
                <p class="pt-2 pb-2 leading-loose sm:leading-loose sm:text-lg">
                    Are you ready to collaborate and make a difference? Share your details with us, 
                    and we’ll connect promptly. Together, we can uplift communities across Africa!
                </p>
            </div>

            <!-- Form Section -->
            <div class="mt-12 lg:w-1/2 w-full px-4 md:px-0 ">
                <form method="POST" class="space-y-6">
                    @csrf
                    <p>Name <span class="text-gray-600">(required)</span></p>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <!-- First Name -->
                        <div class="flex-1">
                            <label for="first_name" class="block text-lg font-normal mb-1">First Name</label>
                            <input type="text" id="first_name" name="first_name" required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring focus:ring-blue-500">
                            @error('first_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Last Name -->
                        <div class="flex-1">
                            <label for="last_name" class="block text-lg font-normal mb-1">Last Name</label>
                            <input type="text" id="last_name" name="last_name" required
                                class="block w-full px-3 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring focus:ring-blue-500">
                            @error('last_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-lg font-normal mb-1">Email <span class="text-gray-600">(required)</span></label>
                        <input type="email" id="email" name="email" required
                            class="block w-full px-3 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring focus:ring-blue-500">
                        @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-lg font-normal mb-1">Message <span class="text-gray-600">(required)</span></label>
                        <textarea id="message" name="message" rows="4" required
                            class="block w-full px-3 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring focus:ring-blue-500"></textarea>
                        @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Submit Button -->
                    <div class="flex justify-center md:justify-start">
                        <button type="submit"
                            class="text-white bg-black w-32 p-4 rounded-full hover:bg-gray-800 transition-all duration-300">
                            SEND
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = [
                '{{ asset('images/s4.jpg') }}',
                '{{ asset('images/s1.jpg') }}',
                '{{ asset('images/s3.jpg') }}',
                '{{ asset('images/s10.jpg') }}',
                '{{ asset('images/s6.jpg') }}'
            ];

            let currentIndex = 0;

            function changeImage() {
                currentIndex = (currentIndex + 1) % images.length;
                document.getElementById('heroImage').src = images[currentIndex];
            }

            setInterval(changeImage, 5000); // Change image every 5 seconds
        });
    </script>
@endsection
