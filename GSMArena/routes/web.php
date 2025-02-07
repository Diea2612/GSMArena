<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoverageController;
use App\Http\Controllers\DealsController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\GlossaryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhoneFinderController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RumorMillController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\TipUsController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\CommentsController;


// use App\Http\Controllers\ArenaEVControllers\{
//     ArenaEVAboutUsController, ArenaEVCompareController, ArenaEVController, ArenaEVFinderController, ArenaEVNewsController,
//     ArenaEVRegisterController, ArenaEVReviewsController, ArenaEVTermsController, ArenaEVGlossaryController, ArenaEVPrivacyController
// };

// use App\Http\Controllers\MerchControllers\{
//     MerchAllProductsController, MerchCartController, MerchController, MerchContactController,
//     MerchFAQController, MerchPrivacyController, MerchTermsController
// };

use Illuminate\Support\Facades\Route;

// ---------------------
// User Routes
// ---------------------
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/account', [UserController::class, 'account'])->name('account')->middleware('auth');
});

// --------------------- 
// GSMArena Routes
// ---------------------
// Home Page Route
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Update Home Page Data (with CSRF protection)
Route::post('/home/update', [HomeController::class, 'update'])->name('home.update');

// Deals
Route::prefix('deals')->name('deals.')->group(function () {
    Route::get('region/{region}', [DealsController::class, 'getDealsByRegion'])->name('region');
    Route::get('regions', [DealsController::class, 'getAvailableRegions'])->name('regions');
});

// News
Route::resource('news', NewsController::class)->except(['create', 'edit']);
Route::prefix('news')->name('news.')->group(function () {
    Route::get('category/{category}', [NewsController::class, 'getByCategory'])->name('category');
    Route::get('search', [NewsController::class, 'search'])->name('search');
    Route::get('featured', [NewsController::class, 'getFeatured'])->name('featured');
});

// Comments
Route::resource('comments', CommentsController::class)->except(['create', 'edit']);
Route::prefix('comments')->name('comments.')->group(function () {
    Route::get('post/{postId}', [CommentsController::class, 'getByPost'])->name('post');
    Route::post('reply/{commentId}', [CommentsController::class, 'reply'])->name('reply');
});

// Phone Finder
Route::prefix('phone-finder')->name('phoneFinder.')->group(function () {
    Route::get('/', [PhoneFinderController::class, 'index'])->name('index');
    Route::get('brand/{brand}', [PhoneFinderController::class, 'searchByBrand'])->name('brand');
    Route::get('model/{model}', [PhoneFinderController::class, 'searchByModel'])->name('model');
    Route::get('release-date', [PhoneFinderController::class, 'filterByReleaseDate'])->name('releaseDate');
    Route::get('specifications', [PhoneFinderController::class, 'searchBySpecifications'])->name('specifications');
});

// Reviews and Videos
Route::resource('reviews', ReviewsController::class)->except(['create', 'edit']);
Route::get('reviews/phone/{phoneId}', [ReviewsController::class, 'getReviewsByPhone'])->name('reviews.phone');
Route::get('reviews/user/{userId}', [ReviewsController::class, 'getReviewsByUser'])->name('reviews.user');
Route::resource('videos', VideosController::class)->except(['create', 'edit']);

// Featured
Route::resource('featured', FeaturedController::class)->except(['create', 'edit']);
Route::get('featured/author/{author}', [FeaturedController::class, 'getByAuthor'])->name('featured.author');

// Contact
Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'showContactForm'])->name('form');
    Route::post('/submit', [ContactController::class, 'submitContactForm'])->name('submit');
    Route::get('/tip-us', [ContactController::class, 'getTipUsFormLink'])->name('tipUs');
    Route::get('/support-email', [ContactController::class, 'getSupportEmail'])->name('supportEmail');
    Route::get('/advertising-link', [ContactController::class, 'getAdvertisingLink'])->name('advertisingLink');
});

// Brands, Rumors, Devices
Route::resource('brands', BrandsController::class);
Route::resource('rumors', RumorMillController::class)->except(['create', 'edit']);
Route::resource('devices', DevicesController::class);
Route::get('devices/region/{region}', [DevicesController::class, 'getDevicesByRegion'])->name('devices.region');

// Tip Us
Route::prefix('tip-us')->name('tipUs.')->group(function () {
    Route::get('/', [TipUsController::class, 'showForm'])->name('form');
    Route::post('/submit', [TipUsController::class, 'submitTip'])->name('submit');
});

// Photos
Route::resource('photos', PhotosController::class)->except(['create', 'edit']);

// ---------------------
// ArenaEV Routes
// ---------------------
// Route::prefix('arenaev')->name('arenaev.')->group(function () {
//     Route::get('/', [ArenaEVController::class, 'index'])->name('index');
//     Route::resource('news', ArenaEVNewsController::class)->only(['index', 'show', 'store']);
//     Route::resource('reviews', ArenaEVReviewsController::class)->only(['index', 'show', 'store']);
//     Route::get('about-us', [ArenaEVAboutUsController::class, 'index'])->name('about.index');
//     Route::get('compare', [ArenaEVCompareController::class, 'index'])->name('compare.index');
//     Route::post('compare', [ArenaEVCompareController::class, 'compare'])->name('compare');
//     Route::get('finder', [ArenaEVFinderController::class, 'index'])->name('finder.index');
//     Route::get('register', [ArenaEVRegisterController::class, 'showForm'])->name('register.show');
//     Route::post('register', [ArenaEVRegisterController::class, 'register'])->name('register.submit');
//     Route::resource('glossary', ArenaEVGlossaryController::class)->except(['edit']);
//     Route::resource('privacy', ArenaEVPrivacyController::class)->only(['index', 'edit', 'update']);
// });

// ---------------------
// Merch Routes
// ---------------------
// Route::prefix('merch')->name('merch.')->group(function () {
//     Route::get('/', [MerchController::class, 'index'])->name('index');
//     Route::get('products', [MerchAllProductsController::class, 'index'])->name('products.index');
//     Route::resource('cart', MerchCartController::class)->only(['show']);
//     Route::post('cart/add', [MerchCartController::class, 'addToCart'])->name('cart.add');
//     Route::delete('cart/remove/{id}', [MerchCartController::class, 'removeFromCart'])->name('cart.remove');
//     Route::get('contact', [MerchContactController::class, 'index'])->name('contact.index');
//     Route::post('contact/store', [MerchContactController::class, 'store'])->name('contact.store');
//     Route::get('faq', [MerchFAQController::class, 'index'])->name('faq.index');
//     Route::get('faq/{id}', [MerchFAQController::class, 'show'])->name('faq.show');
//     Route::get('privacy', [MerchPrivacyController::class, 'index'])->name('privacy.index');
//     Route::get('terms', [MerchTermsController::class, 'index'])->name('terms.index');
// });

// ---------------------
// Miscellaneous Routes
// ---------------------
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy.index');
Route::get('/terms', [TermsController::class, 'index'])->name('terms.index');
Route::get('/tools', [ToolsController::class, 'index'])->name('tools.index');
Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');

// Fallback for undefined routes
Route::fallback(function () {
    return view('errors.404');
});
