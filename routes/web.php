<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Models\Blog;
use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    $jobs = JobListing::latest()->take(3)->get();

    return view('welcome', compact('blogs', 'jobs'));
});

Route::get('/dashboard', function () {
    $blogCount = Blog::count();
    $jobCount = JobListing::count();

    return view('dashboard', compact('blogCount', 'jobCount'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('blogs', BlogController::class);
        Route::resource('jobs', JobListingController::class);
    });
});

Route::get('/blogs', function () {
    $blogs = Blog::latest()->get();

    return view('public.blogs', compact('blogs'));
});

Route::get('/jobs', function () {
    $jobs = JobListing::latest()->get();

    return view('public.jobs', compact('jobs'));
});
Route::post('/jobs/{job}/apply', [JobApplicationController::class, 'store'])->name('jobs.apply');

Route::view('/about', 'public.about');
Route::view('/contact', 'public.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/blog/{slug}', function ($slug) {
    $blog = Blog::where('slug', $slug)->firstOrFail();

    return view('public.blog_single', compact('blog'));
});

require __DIR__.'/auth.php';
