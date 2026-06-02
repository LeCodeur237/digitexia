<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SolutionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;



Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr', 'es', 'it', 'zh'])) {
        Session::put('locale', $locale);
    }
    return Redirect::back();
})->name('lang.switch');


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/services-details', function () {
    return view('pages.service-details');
});

Route::get('/the-problem', function () {
    return view('pages.problem');
});

Route::get('/problem', function () {
    return view('pages.problem');
});

Route::get('/solutions', [SolutionController::class, 'index'])->name('solutions.index');
Route::get('/solutions/{slug}', [SolutionController::class, 'show'])->name('solutions.show');

Route::get('/why-us', function () {
    return view('pages.why-us');
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

Route::get('/life-at-digi', [BlogController::class, 'index'])->name('blog.index');
Route::get('/life-at-digi/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/life-at-digi/{post:slug}/comments', [BlogCommentController::class, 'store'])
    ->middleware('auth')
    ->name('blog.comments.store');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::prefix('admin/blog')
    ->middleware('auth')
    ->name('blog.admin.')
    ->group(function () {
        Route::get('/', [BlogController::class, 'adminIndex'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/', [BlogController::class, 'store'])->name('store');
        Route::get('/{post}/edit', [BlogController::class, 'edit'])->name('edit');
        Route::match(['put', 'patch'], '/{post}', [BlogController::class, 'update'])->name('update');
        Route::delete('/{post}', [BlogController::class, 'destroy'])->name('destroy');
    });

Route::get('/life-at-digi-details', function () {
    return view('pages.blog-details');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/careers', function () {
    return view('pages.careers');
});
