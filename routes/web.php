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
Route::get('/privacy-policy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');

//Route::get('/dashboard', function () {
//    return view('backend.index');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BackendController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about/update/{id}', [AboutController::class, 'update'])->name('about.update');

    Route::get('/privacy/edit/{id}', [PrivacyController::class, 'edit'])->name('privacy.edit');
    Route::post('/privacy/update/{id}', [PrivacyController::class, 'update'])->name('privacy.update');

    Route::get('/terms/edit/{id}', [TermsController::class, 'edit'])->name('terms.edit');
    Route::post('/terms/update/{id}', [TermsController::class, 'update'])->name('terms.update');

    Route::get('/agent-request/manage', [AgentRequestController::class, 'manage'])->name('agent-request.manage');
    Route::get('/agent-request/delete/{id}', [AgentRequestController::class, 'delete'])->name('agent-request.delete');

    Route::get('/agent/registration', [AgentController::class, 'registration'])->name('agent.registration');
    Route::get('/agent/manage', [AgentController::class, 'manage'])->name('agent.manage');

    Route::get('/bus/register', [BusController::class, 'register'])->name('bus.register');

    Route::get('/feedbacks/manage', [ContactController::class, 'manage'])->name('feedbacks.manage');
    Route::get('/feedbacks/delete/{id}', [ContactController::class, 'delete'])->name('feedbacks.delete');
});

require __DIR__ . '/auth.php';
