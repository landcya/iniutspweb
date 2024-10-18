@extends('layouts.layout2')

@section('title', 'Register')

@section('konten')
<div class="bg-gradient-to-r from-purple-500 to-purple-300 min-h-screen flex items-center justify-center">
    <form action="{{ route('register') }}" method="POST" class="w-full max-w-lg bg-white p-10 rounded-lg shadow-xl transform transition-all duration-300 hover:scale-105">
        @csrf
        
        <h2 class="text-3xl font-extrabold mb-6 text-purple-800 text-center font-poppins">Let's Create Your Account <br>
            😊🎈</h2>

      
        <div class="relative z-0 w-full mb-6 group">
            <input type="email" name="email" id="floating_email" class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-purple-400 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
            <label for="floating_email" class="peer-focus:font-medium absolute text-lg text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600">Email</label>
        </div>

     
        <div class="relative z-0 w-full mb-6 group">
            <input type="password" name="password" id="floating_password" class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-purple-400 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
            <label for="floating_password" class="peer-focus:font-medium absolute text-lg text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600">Password</label>
        </div>

       
        <div class="relative z-0 w-full mb-6 group">
            <input type="password" name="password_confirmation" id="floating_repeat_password" class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-purple-400 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
            <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-lg text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600">Confirm Password</label>
        </div>


        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="first_name" id="floating_first_name" class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-purple-400 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                <label for="floating_first_name" class="peer-focus:font-medium absolute text-lg text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600">First Name</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="last_name" id="floating_last_name" class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-purple-400 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
                <label for="floating_last_name" class="peer-focus:font-medium absolute text-lg text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600">Last Name</label>
            </div>
        </div>


        <div class="relative z-0 w-full mb-6 group">
            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" id="floating_phone" class="block py-3 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-purple-400 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer" placeholder=" " required />
            <label for="floating_phone" class="peer-focus:font-medium absolute text-lg text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600">Phone Number (123-456-7890)</label>
        </div>

        <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-lg transition duration-300 focus:ring-4 focus:ring-purple-300 focus:outline-none text-lg">Register</button>
    </form>
</div>
@endsection
