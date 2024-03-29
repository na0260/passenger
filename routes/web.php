<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\AgentRequestController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\BusRouteController;
use App\Http\Controllers\BusTrackingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/agent-registration', [FrontendController::class, 'agent_reg'])->name('agent-reg');
Route::post('/agent-registration/store', [AgentRequestController::class, 'store'])->name('agent-request.store');
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact-us.store');
Route::get('/bus-routes', [FrontendController::class, 'bus_routes'])->name('bus-routes');
Route::get('/search-bus', [FrontendController::class, 'bus_search'])->name('bus-search');
Route::get('/bus-details-{id}', [FrontendController::class, 'bus_details'])->name('bus-details');
Route::post('/search-bus-information', [FrontendController::class, 'search'])->name('search');
Route::get('/privacy-policy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');
Route::get('/bus-tracking-{id}', [FrontendController::class, 'track'])->name('bus.track');

//Route::get('/dashboard', function () {
//    return view('backend.index');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BackendController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/bus/register', [BusController::class, 'register'])->name('bus.register');
    Route::get('/bus/list', [BusController::class, 'manage'])->name('bus.manage');
    Route::post('/bus/store', [BusController::class, 'store'])->name('bus.store');

    Route::get('/diver/register', [DriverController::class, 'register'])->name('driver.register');
    Route::post('/diver/store', [DriverController::class, 'store'])->name('driver.store');

    Route::get('/bus/route/register', [BusRouteController::class, 'register'])->name('bus-route.register');
    Route::post('/bus/route/store', [BusRouteController::class, 'store'])->name('bus-route.store');

    Route::get('/bus/route/tracking/update-{id}', [BusTrackingController::class, 'track'])->name('bus-route.track');
    Route::post('/bus/route/tracking-{id}', [BusTrackingController::class, 'update'])->name('bus-route.track.update');


    Route::middleware('agent')->group(function () {
        Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::post('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');

        Route::get('/privacy/edit/{id}', [PrivacyController::class, 'edit'])->name('privacy.edit');
        Route::post('/privacy/update/{id}', [PrivacyController::class, 'update'])->name('privacy.update');

        Route::get('/terms/edit/{id}', [TermsController::class, 'edit'])->name('terms.edit');
        Route::post('/terms/update/{id}', [TermsController::class, 'update'])->name('terms.update');

        Route::get('/agent-request/manage', [AgentRequestController::class, 'manage'])->name('agent-request.manage');
        Route::get('/agent-request/delete/{id}', [AgentRequestController::class, 'delete'])->name('agent-request.delete');

        Route::get('/agent/registration', [AgentController::class, 'registration'])->name('agent.registration');
        Route::post('/agent/store', [AgentController::class, 'store'])->name('agent.store');
        Route::get('/agent/manage', [AgentController::class, 'manage'])->name('agent.manage');
        Route::get('/agent/status/update/{id}', [AgentController::class, 'status'])->name('agent.status.update');

        Route::get('/feedbacks/manage', [ContactController::class, 'manage'])->name('feedbacks.manage');
        Route::get('/feedbacks/delete/{id}', [ContactController::class, 'delete'])->name('feedbacks.delete');
    });

});

require __DIR__ . '/auth.php';
