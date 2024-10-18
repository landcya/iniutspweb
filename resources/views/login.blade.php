@extends('layouts.layout1')

@section("title", "Login")

@section("konten")
<div class="bg-gradient-to-r from-purple-500 to-indigo-600 min-h-screen flex items-center justify-center">
    <form action="{{ url('/contact') }}" method="GET" class="w-full max-w-md p-10 bg-white rounded-lg shadow-xl transform transition-all duration-300 hover:scale-105">
        <h2 class="text-3xl font-extrabold mb-5 text-center text-purple-700 font-poppins">Welcome Back! 🎉</h2>

        <div class="mb-6">
            <label for="email" class="block mb-2 text-lg font-semibold text-purple-800">Email </label>
            <input type="email" id="email" name="email" class="bg-purple-50 border border-purple-300 text-purple-800 text-lg rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent block w-full p-3 transition duration-200 ease-in-out" placeholder="wulan@2091.com" required />
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 text-lg font-semibold text-purple-800">Password</label>
            <input type="password" id="password" name="password" class="bg-purple-50 border border-purple-300 text-purple-800 text-lg rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent block w-full p-3 transition duration-200 ease-in-out" required />
        </div>

        <div class="flex items-center mb-6">
            <input id="remember" type="checkbox" class="w-5 h-5 text-purple-600 border-gray-300 rounded focus:ring-2 focus:ring-purple-500" />
            <label for="remember" class="ml-2 text-lg font-medium text-purple-800">Remember Me</label>
        </div>

        <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-4 focus:ring-purple-300 text-white font-semibold rounded-lg text-lg px-6 py-3 transition duration-200 ease-in-out shadow-lg">Login</button>
    </form>
</div>
@endsection
