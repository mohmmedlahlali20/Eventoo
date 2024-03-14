<?php

use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\OrganisateurController;
use App\Http\Controllers\Auth\socialityController;
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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('/admin', AdminController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/event', EvenementController::class);
    Route::get('/evento',[AdminController::class , 'evento'])->name('evento');
    Route::put('/update-validation/{id}', [AdminController::class ,'updateValidation'])->name('updateValidation');
    Route::get('/stats', [AdminController::class, 'getStats'])->name('stats');
    
 
});

Route::middleware(['auth', 'role:Organisateur'])->group(function () {
    Route::resource('/Event', EvenementController::class);
    Route::resource('organisateur', OrganisateurController::class);
    Route::put('/update/{reservation}', [AdminController::class, 'updateStatus'])->name('updateStatus');
    Route::get('/reserv', [AdminController::class, 'reserv'])->name('reserv');
});



Route::middleware(['auth'])->group(function () {
    Route::resource('/User', EvenementController::class);
    Route::get('/search', [EvenementController::class , 'search']);
    Route::get('/filtrage', [EvenementController::class, 'filtrage']);
    Route::resource('/reservation', ReservationController::class);
    Route::get('/events/filter', [CategoryController::class, 'filter'])->name('filterReservations');

});


// Route::get('/ticket', function () {
//     Browsershot::url('https://laravel.com')
//     ->setIncludePath('$PATH:/home/mohammed/.nvm/versions/node/v18.19.1/bin')
//     ->save('example.png');
//     return view('reservation.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/{provider}/redirect',[socialityController::class,'redirect']);
 
Route::get('/auth/{provider}/callback', [socialityController::class,'callback']);


require __DIR__.'/auth.php';
