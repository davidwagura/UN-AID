@extends('welcome')

@section('content')

<!-- Mission Section -->
<div class="m-12 flex flex-col md:flex-row justify-between items-start space-y-8 md:space-y-0">

    <!-- Text -->
    <div class="w-full md:w-2/3 leading-loose">
        <h1 class="text-[#3862b6] font-semibold text-5xl md:text-6xl">Our Mission</h1>
        <p class="mt-8 text-base md:text-lg">
            Born from the vision of empowering communities, we <br>
            stand in unity with the United Nations at Nairobi. Our <br>
            essence thrives on lifting each other, fostering local <br>
            businesses, and propelling the growth of indigenous <br>
            commodities across Africa. Together, we weave a <br>
            narrative of resilience and innovation, celebrating the <br>
            unique stories that every community has to tell.
        </p>
        <p class="mt-4 text-base md:text-lg">
            Authenticity reigns supreme in our approach. In a sea <br>
            of voices, it's yours that will shine the brightest. If our <br>
            words resonate with your essence, then we've woven <br>
            the right tapestry. Let's embark on this journey of <br>
            transformation and growth together.
        </p>
    </div>

    <!-- Image -->
    <div class="w-full md:w-1/2">
        <img src="{{ asset('images/s5.jpg') }}" alt="Mission Image" class="h-auto md:h-screen w-full object-cover rounded-lg">
    </div>

</div>

<!-- Hero Section -->
<div class="relative bg-gray-900 text-[#fefeff] h-screen flex items-center justify-center m-6">

    <img src="{{ asset('images/s4.jpg') }}" alt="Hero Background" class="absolute inset-0 w-full h-full object-cover opacity-70">
    
    <div class="relative z-10 text-center">

        <h1 class="text-4xl md:text-6xl font-bold mb-8">Empower Your Journey</h1>

        <a href="#" class="bg-[#90adde] text-[#09111c] p-4 uppercase text-sm md:text-base rounded-full hover:bg-[#768eb6] transition">View Services</a>

    </div>
    
</div>

@endsection
