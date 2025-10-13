<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ContentsController;
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

    Route::resource('/blog', BlogsController::class);
    Route::resource('/media', MediaController::class);
    Route::resource('/setting', SettingsController::class);

    // 
    Route::prefix('content')->group(function () {
        Route::get('view/{page_name}/{page_title}/{type_name}/{is_queryset?}', [ContentsController::class, 'index'])->name('content.index');
        Route::get('edit/{content}/{page_name}/{page_title}', [ContentsController::class, 'edit'])->name('content.edit');
        Route::post('store/{page_name}/{type_name}/{is_queryset?}', [ContentsController::class, 'store'])->name('content.store');
        Route::post('email/{page_name}/{type_name}/{is_queryset?}', [ContentsController::class, 'cPanelEmail'])->name('content.cpanel');
        Route::put('update/{content}/{page_name}/{type_name}', [ContentsController::class, 'update'])->name('content.update');
        Route::delete('delete/{content}/{page_name}/{type_name}', [ContentsController::class, 'destroy'])->name('content.delete');
    });


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
        Route::post('/contact', 'contacts')->name('contacts');
    });



require __DIR__ . '/auth.php';
