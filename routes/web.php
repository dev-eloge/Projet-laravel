<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// template
Route::get('/', function () {
    return view('theme/home');
});

Route::get('/a-propos', function () {
    return view('theme/about');
})->name("about");

Route::get('/blog-details', function () {
    return view('theme/blog-details');
})->name("blog-details");

Route::get('/blog', function () {
    return view('theme/blog');
})->name("blog");

Route::get('/contact', function () {
    return view('theme/contact');
})->name("contact");

Route::get('/faq', function () {
    return view('theme/faq');
})->name("faq");

Route::get('/comment-ca-marche', function () {
    return view('theme/how-it-works');
})->name("how-it-works");

Route::get('/legal', function () {
    return view('theme/legal');
})->name("legal");

Route::get('/privacy-policy', function () {
    return view('theme/privacy-policy');
})->name("privacy-policy");

Route::get('/service-details', function () {
    return view('theme/service-details');
})->name("service-details");

Route::get('/services', function () {
    return view('theme/services');
})->name("services");


Route::get('/terms', function () {
    return view('theme/terms');
})->name("terms");







