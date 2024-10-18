<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;


Route::get('/', function () {
    return view('login');
})->name('login');


Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register', function () {
    
    return redirect()->route('login')->with('success', 'Registration successful! Please login.');
});

Route::get('/contact', function () {
    $contacts = [];
    $faker = Faker::create();
    
    for ($i = 0; $i < 15; $i++) {
        $contacts[] = [
            "nama" => $faker->name,
            "email" => $faker->unique()->safeEmail,
            "no" => $faker->phoneNumber
        ];
    }

    return view('contact', ['contacts' => $contacts]);
});
