<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\PrizeClaimedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Maatwebsite\Excel\Row;

use function PHPSTORM_META\map;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister'=> Route::has('register')
//     ]);
// });

Route::get('/home',[HomeController::class,'index'])->middleware(['auth','verified'])->name('index');
Route::get('/',[HomeController::class,'index'])->middleware(['auth','verified'])->name('index');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
    
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/claimprize', function () {
    return Inertia::render('ClaimPrize');
});

Route::middleware(['auth','role:1'])->group(function () {

    //Prize Claimed Controller
    Route::get('/dashboard',[PrizeClaimedController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/edit/{id}',[PrizeClaimedController::class, 'edit'])->name('dashboard.edit');
    Route::put('/dashboard/update/{id}',[PrizeClaimedController::class, 'update'])->name('dashboard.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/import',[ImportController::class, 'index'])->name('import.index');
    Route::get('/import/uploadform',[ImportController::class, 'uploadform'])->name('import.uploadform');
    Route::post('/import/upload',[ImportController::class, 'upload'])->name('import.upload');
    
    
});

require __DIR__.'/auth.php';
