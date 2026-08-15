<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about.index');

// Projects listing page
Route::view('/projects', 'projects.index');

Route::view('/contact', 'contact.index')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::view('/contact', 'contact.index');
Route::view('/services', 'services.energy-consulting');
Route::view('/services/energy-consulting', 'services.energy-consulting');
Route::view('/services/epc-project-delivery', 'services.epc-project-delivery');
Route::view('/services/battery-storage-bess', 'services.battery-storage-bess');
Route::view('/services/active-monitoring', 'services.active-monitoring');// Individual project pages — one static view each, same pattern as /about
Route::view('/projects/zee-realty-estate-solar-hub', 'projects.zee-realty-estate-solar-hub');
Route::view('/projects/izenergy-joint-epc-delivery', 'projects.izenergy-joint-epc-delivery');
Route::view('/projects/megaloite-industrial-power-station', 'projects.megaloite-industrial-power-station');
Route::view('/projects/fcmb-headquarters-solar-retrofit', 'projects.fcmb-headquarters-solar-retrofit');