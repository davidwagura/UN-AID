@extends('welcome')

@section('content')

<!-- Empowering Communities Section -->
<div class="m-6">

    <div class="mt-6">

        <!-- Title and Description -->
        <div class="flex flex-col md:flex-row justify-between items-start leading-loose space-y-8 md:space-y-0">
            <div class="w-full md:w-1/2">
                <h1 class="font-semibold text-4xl md:text-6xl text-[#3862b6]">Empowering <br> Communities</h1>
            </div>

            <div class="w-full md:w-1/2 mt-10">
                <p class="text-base md:text-lg">
                    It all starts with a vision. Perhaps you're inspired to cultivate <br>
                    a thriving business. Or maybe you're ready to elevate your <br>
                    passion to new heights. You could even have a <br>
                    groundbreaking initiative that deserves to reach a broader <br>
                    audience. Whatever your dream, the narrative you craft <br>
                    online will be the catalyst for your success.
                </p>
                <p class="mt-4 text-base md:text-lg">
                    Don't stress about sounding like a corporate giant. Be <br>
                    authentic. With countless websites vying for attention, your <br>
                    unique narrative is what will make yours stand out in this <br>
                    vibrant digital tapestry.
                </p>
            </div>
        </div>

        <!-- Service Offerings -->
        <div class="flex flex-col md:flex-row justify-between mt-16 space-y-8 md:space-y-0 md:space-x-4">
            <!-- Empowerment Service -->
            <div class="w-full md:w-1/3 p-4 rounded-lg bg-white shadow-lg">
                <img src="{{ asset('images/s1.jpg') }}" alt="Empowerment Service" class="w-full h-64 object-cover rounded-lg mb-4">
                <h2 class="text-[#3862b6] font-semibold text-xl">Empowerment <br> Service</h2>
                <p class="mb-6 mt-2 text-base">
                    Unleash the potential of your community <br>
                    with our foundational service, designed to <br>
                    elevate local businesses, foster growth, <br>
                    and create lasting impact across Africa.
                </p>
                <button class="w-full md:w-40 rounded-full mt-4 text-[#2c5ab2] border border-[#2c5ab2] p-4 hover:bg-[#e0e0e0] transition">
                    Book Now
                </button>
            </div>

            <!-- Growth Catalyst Service -->
            <div class="w-full md:w-1/3 p-4 rounded-lg bg-white shadow-lg">
                <img src="{{ asset('images/s7.jpg') }}" alt="Growth Catalyst Service" class="w-full h-64 object-cover rounded-lg mb-4">
                <h2 class="text-[#3862b6] font-semibold text-xl">Growth Catalyst <br> Service</h2>
                <p class="mb-6 mt-2 text-base">
                    This service amplifies your reach and <br>
                    strengthens your operational foundation, <br>
                    ensuring your local enterprise thrives in <br>
                    interconnected markets.
                </p>
                <button class="w-full md:w-40 rounded-full mt-4 text-[#2c5ab2] border border-[#2c5ab2] p-4 hover:bg-[#e0e0e0] transition">
                    Book Now
                </button>
            </div>

            <!-- Transformational Service -->
            <div class="w-full md:w-1/3 p-4 rounded-lg bg-white shadow-lg">
                <img src="{{ asset('images/s3.jpg') }}" alt="Transformational Service" class="w-full h-64 object-cover rounded-lg mb-4">
                <h2 class="text-[#3862b6] font-semibold text-xl">Transformational <br> Service</h2>
                <p class="mb-6 mt-2 text-base">
                    Join us in redefining success with a <br>
                    service that not only enhances your <br>
                    business but also cultivates sustainable <br>
                    development for communities across Africa.
                </p>
                <button class="w-full md:w-40 rounded-full mt-4 text-[#2c5ab2] border border-[#2c5ab2] p-4 hover:bg-[#e0e0e0] transition">
                    Book Now
                </button>
            </div>
        </div>

    </div>

</div>

<!-- Hero Section -->
<div class="relative bg-gray-900 text-[#fefeff] h-screen flex items-center justify-center m-6">
    <img src="{{ asset('images/s6.jpg') }}" alt="Hero Background" class="absolute inset-0 w-full h-full object-cover opacity-70">
    <div class="relative z-10 text-center mt-16">
        <h1 class="text-4xl md:text-6xl font-bold mb-8">Unlock Your Potential with a <br> Complimentary Consultation</h1>
        <a href="#" class="bg-[#90adde] text-[#09111c] p-4 uppercase text-sm md:text-base rounded-full hover:bg-[#768eb6] transition">View Services</a>
    </div>
</div>

@endsection
