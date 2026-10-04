<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = Blog::latest()->take(3)->get();
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

Route::get('/services/{slug}', function ($slug) {
    $services = [
        'house-manager' => [
            'title' => 'House Manager & Estate Managers',
            'subtitle' => 'Expert Property and Household Management',
            'description' => 'Solitaire Consultancy provides highly experienced House Managers and Estate Managers who oversee the seamless operation of your luxury properties. From managing domestic staff and coordinating with vendors, to ensuring impeccable maintenance and security, our estate managers are trained to handle complex household operations with absolute precision and discretion. Trust us to find the perfect professional to maintain the high standards of your private residence.',
            'image' => asset('images/house_manager_1791033588093.jpg'),
        ],
        'executive-assistant' => [
            'title' => 'Executive & Personal Assistants',
            'subtitle' => 'Dedicated Support for Your Busy Lifestyle',
            'description' => 'Our highly capable Executive Assistants and Personal Assistants are meticulously vetted to manage your demanding schedule, arrange bespoke travel, and handle complex administrative tasks. Whether you need support for your business endeavors or personal lifestyle requirements, our candidates bring exceptional organizational skills, unwavering confidentiality, and a proactive approach to ensure your life runs smoothly.',
            'image' => asset('images/executive_assistant_1791033601425.jpg'),
        ],
        'chef' => [
            'title' => 'Private Chefs & Cooks',
            'subtitle' => 'Culinary Excellence Tailored to Your Palate',
            'description' => 'Elevate your dining experience with Solitaire Consultancy’s elite Private Chefs and Cooks. Our culinary experts are capable of designing bespoke menus that cater specifically to your dietary preferences, cultural tastes, and entertaining needs. From daily family meals to grand dinner parties, our chefs deliver restaurant-quality cuisine in the comfort of your own home, prioritizing fresh ingredients, impeccable presentation, and absolute food safety.',
            'image' => asset('images/private_chef_1791033614640.jpg'),
        ],
        'personal-butler' => [
            'title' => 'Personal Butlers',
            'subtitle' => 'The Pinnacle of Personalized Household Service',
            'description' => 'Experience the ultimate in bespoke household service with our impeccably trained Personal Butlers. Trained in the finest traditions of hospitality, our butlers are dedicated to maintaining the sanctuary of your home. They anticipate your needs, manage your wardrobe, coordinate sophisticated events, and provide highly personalized service with the utmost discretion and grace, ensuring a refined and effortless lifestyle for you and your guests.',
            'image' => asset('images/personal_butler_1791033627050.jpg'),
        ],
        'chauffeur' => [
            'title' => 'Chauffeurs & Drivers',
            'subtitle' => 'Professional, Safe, and Discreet Transportation',
            'description' => 'Solitaire Consultancy connects you with professional, discreet, and highly trained Chauffeurs and Drivers. Understanding that your time and safety are paramount, our chauffeurs ensure your secure and timely arrival at every destination. With extensive knowledge of local routes, advanced driving skills, and a commitment to maintaining your luxury vehicles in pristine condition, our drivers provide a seamless and relaxing travel experience.',
            'image' => asset('images/chauffeur_1791033640039.jpg'),
        ],
        'nanny' => [
            'title' => 'Nannies & Babysitters',
            'subtitle' => 'Nurturing Care for Your Most Precious Assets',
            'description' => 'We understand that entrusting someone with your children requires absolute confidence. Solitaire Consultancy provides experienced, vetted, and deeply nurturing Nannies and Babysitters who are dedicated to the well-being and development of your children. From educational engagement and routine management to providing a safe, loving environment, our child care professionals offer absolute peace of mind for busy parents.',
            'image' => asset('images/nanny_1791033658428.jpg'),
        ],
    ];

    if (! array_key_exists($slug, $services)) {
        abort(404);
    }

    $service = $services[$slug];

    return view('public.service', compact('service'));
});

Route::get('/blog/{slug}', function ($slug) {
    $blog = Blog::where('slug', $slug)->firstOrFail();

    return view('public.blog_single', compact('blog'));
});

require __DIR__.'/auth.php';
