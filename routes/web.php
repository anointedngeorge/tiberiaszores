<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MEventsController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\VolunteersController;
use App\Models\Partnership;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get(
        '/',
        [DashboardController::class, 'index']
    )->name('dashboard');
    

    Route::resource('/events', MEventsController::class);
    Route::resource('/blog', BlogsController::class);
    Route::resource('/volunteer', VolunteersController::class);
    Route::resource('/partners', PartnershipController::class);
    Route::resource('/media', MediaController::class);
    Route::resource('/setting', SettingsController::class);
    Route::resource('/contacts', ContactsController::class);

    // 
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::name('frontend.')
    ->controller(FrontendController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/volunteer', 'register_volunteer')->name('volunteer');
        Route::post('/partners', 'register_partnership')->name('partners');
        Route::post('/contact', 'contacts')->name('contacts');
    });



require __DIR__.'/auth.php';
