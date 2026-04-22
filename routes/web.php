<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Zone;

Route::get('/', function () {
    $zones = Zone::all();
    return view('landing.pages.index', compact('zones'));
});



Route::get('/detail', function () {
    return view('landing.pages.detail');
});

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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
