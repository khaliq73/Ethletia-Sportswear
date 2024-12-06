<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\QuoteController;
// Public Routes
Route::post('/get-a-quote/submit', [QuoteController::class, 'store'])->name('get-a-quote.store');
// Admin Routes
Route::prefix('admin/quotes')->group(function () {
    Route::get('/', [QuoteController::class, 'index'])->name('admin.quotes.index'); // Index route
    Route::get('/{id}', [QuoteController::class, 'show'])->name('admin.quotes.show'); // Show specific quote
    Route::delete('/{id}', [QuoteController::class, 'destroy'])->name('admin.quotes.destroy'); // Delete quote
    Route::get('/{id}/edit', [QuoteController::class, 'edit'])->name('admin.quotes.edit'); // Edit form
    // Handle edit POST
    Route::put('/admin/quotes/{id}', [QuoteController::class, 'update'])->name('admin.quotes.update');
});
Route::prefix('admin')->group(function () {
    // Show all contacts
    Route::get('contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index'); 
    // Edit contact
    Route::get('contacts/{id}/edit', [AdminContactController::class, 'edit'])->name('admin.contacts.edit');
    // Update contact
    Route::put('contacts/{id}', [AdminContactController::class, 'update'])->name('admin.contacts.update');
    // Delete contact
    Route::delete('contacts/{id}', [AdminContactController::class, 'destroy'])->name('admin.contacts.destroy');
});
Route::post('/submit-contact', [ContactController::class, 'store'])->name('contact.store');
route::get('/', function () {
    return view('index');
});
route::get('/About-us', function () {
    return view('about-us');
});
route::get('/Sportswear', function () {
    return view('sportswear');
});
route::get('/Activewear', function () {
    return view('activewear');
});
route::get('/Gloves', function () {
    return view('gloves');
});
route::get('/Accessories', function () {
    return view('accessories');
});
route::get('/Casual-wear', function () {
    return view('casualwear');
});

route::get('/get-a-quote', function () {
    return view('get-a-quote');
});
route::get('/FAQs', function () {
    return view('faqs');
});
route::get('/Terms-and-Conditions', function () {
    return view('terms-and-conditions');
});
route::get('/Privacy-Policy', function () {
    return view('privacy-policy');
});
route::get('/Catalogs', function () {
    return view('catalogs');
});
route::get('/Contact-US', function () {
    return view('contact-us');
});
route::get('/More-Blogs', function () {
    return view('more-blogs');
});
route::get('/Blog10-Post10', function () {
    return view('blog10-post10');
});
route::get('/Blog9-Post9', function () {
    return view('blog9-post9');
});
route::get('/Blog8-Post8', function () {
    return view('blog8-post8');
});
route::get('/Blog7-Post7', function () {
    return view('blog7-post7');
});
route::get('/Blog6-Post6', function () {
    return view('blog6-post6');
});
route::get('/Blog5-Post5', function () {
    return view('blog5-post5');
});
route::get('/Blog4-Post4', function () {
    return view('blog4-post4');
});
route::get('/Blog3-Post3', function () {
    return view('blog3-post3');
});
route::get('/Blog2-Post2', function () {
    return view('blog2-post2');
});
route::get('/Blog1-Post1', function () {
    return view('blog1-post1');
});

route::get('/SportswearCatalog', function () {
    return view('sportswearcatalog');
});

route::get('/ActivewearCatalog', function () {
    return view('activewearcatalog');
});

// Route to show all products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route to show the product creation form
// In web.php
Route::get('/get-a-quote', [ProductController::class, 'getQuote'])->name('get-a-quote');
Route::post('/add-to-quote/{id}', [ProductController::class, 'addToQuote'])->name('add.to.quote');
Route::delete('/remove-from-quote/{id}', [ProductController::class, 'removeFromQuote'])->name('remove.from.quote');
// Route to store the newly created product
 Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route to show a specific product
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// Route to fetch products by category (e.g., Men or Women)
Route::get('/products/category/{category}', [ProductController::class, 'getByCategory'])->name('products.category');
Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');  // Admin dashboard view
})->name('admin.dashboard');
// Product routes handled by AdminController
Route::prefix('admin/products')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');  // Show all products
    Route::get('/create', [AdminController::class, 'create'])->name('create');  // Create new product form
    Route::post('/', [AdminController::class, 'store'])->name('store');  // Store new product
    Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('edit');  // Edit existing product
    Route::put('/{id}', [AdminController::class, 'update'])->name('update');  // Update product details
    Route::delete('/{id}', [AdminController::class, 'destroy'])->name('destroy');  // Delete product
});