@extends('welcome')

@section('content')

<div class="flex flex-col md:flex-row m-6 md:m-12">

    <!-- Contact Info and Form -->
    <div class="flex-1 md:w-1/2 md:mr-8 mb-8 md:mb-0">

        <h1 class="text-[#4771be] font-semibold text-5xl md:text-6xl">Register With <br> Us</h1>

        <p class="mt-4 md:mt-8 leading-loose text-sm md:text-base">
            We invite you to reach out and discover how we can <br>
            collaborate to transform communities across Africa. Your <br>
            inquiries are valuable, and we ensure a responsive approach <br>
            to each message. Remember to select your preferred <br>
            submission method for swift communication.
        </p>

        <div class="mt-4 leading-loose text-sm md:text-base">
            <a href="mailto:contact@un-aid.org" class="text-blue-500">contact@un-aid.org</a> <br>
            <span>(555) 123-456</span>
        </div>

        <div class="mt-12">

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf
            
                <p class="text-2xl lg:text-center font-semibold text-[#4771be] underline">Register Here</p>
            
                <div class="flex flex-col gap-4 md:flex-row md:gap-6">
            
                    <!-- First Name -->
                    <div class="flex-1">
                        <label for="first_name" class="block text-sm md:text-lg font-normal mb-1">First Name</label>
                        <input type="text" id="first_name" name="first_name" required
                            class="block w-full px-3 py-2 border-gray-300 rounded-full focus:outline-none focus:ring">
                        @error('first_name')
                            <p class="text-red-500 text-xs md:text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            
                    <!-- Last Name -->
                    <div class="flex-1">
                        <label for="last_name" class="block text-sm md:text-lg font-normal mb-1">Last Name</label>
                        <input type="text" id="last_name" name="last_name" required
                            class="block w-full px-3 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring">
                        @error('last_name')
                            <p class="text-red-500 text-xs md:text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
            
                </div>
            
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm md:text-lg font-normal mb-1">Email <span class="text-gray-600">(required)</span></label>
                    <input type="email" id="email" name="email" required
                        class="block w-full px-3 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring">
                    @error('email')
                        <p class="text-red-500 text-xs md:text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            
                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm md:text-lg font-normal mb-1">Password <span class="text-gray-600">(required)</span></label>
                    <input type="password" id="password" name="password" required
                        class="block w-full px-3 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring">
                    @error('password')
                        <p class="text-red-500 text-xs md:text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                            
                <div>
                    <button type="submit" class="text-white bg-[#000000] w-full lg:w-32 rounded-full p-4">
                        REGISTER
                    </button>
                </div>
            
            </form>
            
        </div>

    </div>

    <!-- Image -->
    <div class="flex-1 md:w-1/2">
        <img src="{{ asset('images/s9.jpg') }}" alt="Contact section image" class="w-full h-full object-cover rounded-lg">
    </div>

</div>
@endsection