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
//     ArenaEVReviewsController, ArenaEVGlossaryController, ArenaEVPrivacyController
// };

// use App\Http\Controllers\MerchControllers\{
//     MerchAllProductsController, MerchCartController, MerchController, MerchFAQController, MerchPrivacyController, MerchTermsController, MerchContactController
// };

use Illuminate\Support\Facades\Route;

// ---------------------
// User Routes
// ---------------------
Route::prefix('user')->name('user.')->group(function () {
    Route::post('/register', [UserController::class, 'store'])->name('register');
    Route::post('/login', [UserController::class, 'authenticate'])->name('login');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/account', [UserController::class, 'account'])->name('account');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    });
});

// ---------------------
// GSMArena API Routes
// ---------------------

// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Deals
Route::prefix('deals')->name('deals.')->group(function () {
    Route::get('region/{region}', [DealsController::class, 'getDealsByRegion'])->name('region');
    Route::get('regions', [DealsController::class, 'getAvailableRegions'])->name('regions');
});

// News
Route::resource('news', NewsController::class)->only(['index', 'show', 'store']);
Route::prefix('news')->name('news.')->group(function () {
    Route::get('category/{category}', [NewsController::class, 'getByCategory'])->name('category');
    Route::get('search', [NewsController::class, 'search'])->name('search');
    Route::get('featured', [NewsController::class, 'getFeatured'])->name('featured');
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
Route::resource('reviews', ReviewsController::class)->only(['index', 'show', 'store']);
Route::get('reviews/phone/{phoneId}', [ReviewsController::class, 'getReviewsByPhone'])->name('reviews.phone');
Route::get('reviews/user/{userId}', [ReviewsController::class, 'getReviewsByUser'])->name('reviews.user');
Route::resource('videos', VideosController::class)->only(['index', 'show', 'store']);

// Featured
Route::resource('featured', FeaturedController::class)->only(['index', 'show']);

// Contact
Route::prefix('contact')->name('contact.')->group(function () {
    Route::post('/submit', [ContactController::class, 'submitContactForm'])->name('submit');
    Route::get('/support-email', [ContactController::class, 'getSupportEmail'])->name('supportEmail');
});

// Brands, Rumors, Devices
Route::resource('brands', BrandsController::class)->only(['index', 'show']);
Route::resource('rumors', RumorMillController::class)->only(['index', 'show']);
Route::resource('devices', DevicesController::class)->only(['index', 'show']);
Route::get('devices/region/{region}', [DevicesController::class, 'getDevicesByRegion'])->name('devices.region');

// Tip Us
Route::prefix('tip-us')->name('tipUs.')->group(function () {
    Route::post('/submit', [TipUsController::class, 'submitTip'])->name('submit');
});

// Photos
Route::resource('photos', PhotosController::class)->only(['index', 'show']);

// ---------------------
// ArenaEV API Routes
// ---------------------
// Route::prefix('arenaev')->name('arenaev.')->group(function () {
//     Route::get('/', [ArenaEVController::class, 'index'])->name('index');
//     Route::resource('news', ArenaEVNewsController::class)->only(['index', 'show', 'store']);
//     Route::resource('reviews', ArenaEVReviewsController::class)->only(['index', 'show', 'store']);
//     Route::get('about-us', [ArenaEVAboutUsController::class, 'index'])->name('about.index');
//     Route::post('compare', [ArenaEVCompareController::class, 'compare'])->name('compare');
//     Route::get('finder', [ArenaEVFinderController::class, 'index'])->name('finder.index');
//     Route::resource('glossary', ArenaEVGlossaryController::class)->only(['index', 'show']);
// });

// ---------------------
// Merch API Routes
// ---------------------
// Route::prefix('merch')->name('merch.')->group(function () {
//     Route::get('/', [MerchController::class, 'index'])->name('index');
//     Route::get('products', [MerchAllProductsController::class, 'index'])->name('products.index');
//     Route::resource('cart', MerchCartController::class)->only(['show']);
//     Route::post('cart/add', [MerchCartController::class, 'addToCart'])->name('cart.add');
//     Route::delete('cart/remove/{id}', [MerchCartController::class, 'removeFromCart'])->name('cart.remove');
// });

// ---------------------
// Miscellaneous API Routes
// ---------------------
Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');
Route::get('/tools', [ToolsController::class, 'index'])->name('tools.index');

// Fallback for undefined API routes
Route::fallback(function () {
    return response()->json(['message' => 'Resource not found.'], 404);
});
