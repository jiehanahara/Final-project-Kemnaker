<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Zone;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\LandingController;
use App\Models\Attraction;

Route::get('/', function () {
    $zones = Zone::all();
    $attractions = Attraction::all();
    return view('landing.pages.index', compact('zones', 'attractions'));
});



Route::get('/detail', function () {
    return view('landing.pages.detail');
})->name('landing.pages.detail');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('Admin.pages.index');
    })->name('index');
});

    Route::get('/zones', [App\Http\Controllers\ZoneController::class, 'index'])->name('Admin.pages.zones.index');
    Route::get('/zones/create', [App\Http\Controllers\ZoneController::class, 'create'])->name('Admin.pages.zones.create');
    Route::post('/zones', [App\Http\Controllers\ZoneController::class, 'store'])->name('Admin.pages.zones.store');
    Route::get('/zones/{id}', [App\Http\Controllers\ZoneController::class, 'show'])->name('Admin.pages.zones.show');
    Route::get('/zones/{id}/edit', [App\Http\Controllers\ZoneController::class, 'edit'])->name('Admin.pages.zones.edit');
    Route::put('/zones/{id}', [App\Http\Controllers\ZoneController::class, 'update'])->name('Admin.pages.zones.update');
    Route::delete('/zones/{id}', [App\Http\Controllers\ZoneController::class, 'destroy'])->name('Admin.pages.zones.destroy');

Route::get('/attractions', [App\Http\Controllers\AttractionController::class, 'index'])->name('Admin.pages.attraction.index');
Route::get('/attractions/create', [App\Http\Controllers\AttractionController::class, 'create'])->name('Admin.pages.attraction.create');
Route::post('/attractions', [App\Http\Controllers\AttractionController::class, 'store'])->name('Admin.pages.attraction.store');
Route::get('/attractions/{id}', [App\Http\Controllers\AttractionController::class, 'show'])->name('Admin.pages.attraction.show');
Route::get('/attractions/{id}/edit', [App\Http\Controllers\AttractionController::class, 'edit'])->name('Admin.pages.attraction.edit');
Route::put('/attractions/{id}', [App\Http\Controllers\AttractionController::class, 'update'])->name('Admin.pages.attraction.update');
Route::delete('/attractions/{id}', [App\Http\Controllers\AttractionController::class, 'destroy'])->name('Admin.pages.attraction.destroy');

Route::get('/reviews', [App\Http\Controllers\ReviewController::class, 'index'])->name('Admin.pages.reviews.index');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
