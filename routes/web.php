<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhatwedoController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactformController;
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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resources([
        'setting' => SettingController::class,
        'slider' => SliderController::class,
        'aboutus' => AboutusController::class,
        'counter' => CounterController::class,
        'team' => TeamController::class,
        'testimonial' => TestimonialController::class,
        'whatwedo' => WhatwedoController::class,
        'cause' => CauseController::class,
        'event' => EventController::class,
        'blog' => BlogController::class,
        'social' => SocialController::class,
        'contactform' => ContactformController::class
    ]);

});

//frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about_us');
Route::get('/causes', [FrontendController::class, 'cause'])->name('causes');
Route::get('/events', [FrontendController::class, 'event'])->name('events');
Route::get('/blogs', [FrontendController::class, 'blog'])->name('blogs');
Route::get('/blogs-details/{id}', [FrontendController::class, 'blog_details'])->name('blogs_details');
Route::get('/cause-details/{id}', [FrontendController::class, 'cause_details'])->name('cause_details');
Route::post('/contactformsubmit', [FrontendController::class, 'contactSubmit'])->name('contactformsubmit');
