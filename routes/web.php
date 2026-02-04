<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/services-details', function () {
    return view('pages.service-details');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/project-details', function () {
    return view('pages.project-details');
});

Route::get('/our-partners', function () {
    return view('pages.partners');
});

Route::get('/team-members', function () {
    return view('pages.teams');
});

Route::get('/life-at-digi', function () {
    return view('pages.blog');
});

Route::get('/life-at-digi-details', function () {
    return view('pages.blog-details');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/carriers', function () {
    return view('pages.carriers');
});


