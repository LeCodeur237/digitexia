<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\NewsletterSubscriberController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectSurveySubmissionController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProjectSurveyController;
use App\Http\Controllers\SitemapController;
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

Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');

Route::redirect('/about-us', '/why-us', 301);
Route::redirect('/about', '/why-us', 301);
Route::redirect('/services', '/solutions', 301);
Route::redirect('/services-details', '/solutions', 301);
Route::redirect('/services/{slug}', '/solutions', 301);

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

Route::redirect('/project-details', '/projects', 301);

Route::get('/our-partners', function () {
    return view('pages.partners');
});

Route::get('/team', function () {
    return view('pages.team');
});

Route::redirect('/team-members', '/team', 301);

Route::get('/life-at-digi', [BlogController::class, 'index'])->name('blog.index');
Route::get('/life-at-digi/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/life-at-digi/{post:slug}/comments', [BlogCommentController::class, 'store'])
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

Route::prefix('admin/newsletter')
    ->middleware('auth')
    ->name('newsletter.admin.')
    ->group(function () {
        Route::get('/', [NewsletterSubscriberController::class, 'index'])->name('index');
        Route::delete('/{subscriber}', [NewsletterSubscriberController::class, 'destroy'])->name('destroy');
    });

Route::prefix('admin/surveys')
    ->middleware('auth')
    ->name('surveys.admin.')
    ->group(function () {
        Route::get('/', [ProjectSurveySubmissionController::class, 'index'])->name('index');
        Route::get('/{submission}', [ProjectSurveySubmissionController::class, 'show'])->name('show');
        Route::delete('/{submission}', [ProjectSurveySubmissionController::class, 'destroy'])->name('destroy');
    });

Route::prefix('admin/profile')
    ->middleware('auth')
    ->name('admin.profile.')
    ->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
    });

Route::redirect('/life-at-digi-details', '/life-at-digi', 301);

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::post('/contact-us', [ContactController::class, 'send'])->name('contact.send');
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/research/{project}', [ProjectSurveyController::class, 'create'])->name('project-survey.create');
Route::post('/research/{project}', [ProjectSurveyController::class, 'store'])->name('project-survey.store');
Route::redirect('/flexicare-survey', '/research/flexicare', 301);

Route::redirect('/careers', '/contact-us', 301);
