<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteController;
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

Route::get('/', function () {
    return view('front_office.index');
})->name('home');

// Route::get('/home', function () {
//     return view('front_office.index');
// })->name('home');

Route::get('/candidates', function () {
    return view('front_office.candidates');
})->name('candidates');

// Route::get('/register', function () {
//     return view('back_office.register');
// })->name('register');

// Route::get('/login', function () {
//     return view('back_office.login');
// })->name('login');



Route::get('/vote-edit/{id}', [VoteController::class , 'edit'])->name('vote.edit');



Route::post('/vote-add', [VoteController::class , 'store'])->name('vote.add');


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard-vote-resultat', function () {
        return view('back_office.dashboard');
    })->name('dashboard');

    Route::get('/register', function () {
        return view('back_office.register');
    })->name('register');

    Route::get('/candidates-back', function () {
        return view('back_office.candidates');
    })->name('candidates.back');

    Route::get('/votes-back', function () {
        return view('back_office.vote');
    })->name('votes.back');

    Route::get('/candidates-back', [CandidateController::class , 'index'])->name('candidates.back');

    Route::post('/candidate-add', [CandidateController::class , 'store'])->name('candidate.add');

    Route::post('/image-add', [CandidateController::class , 'storeImage'])->name('image.add');

    Route::post('/candidate-edit', [CandidateController::class , 'update'])->name('candidate.edit');

    Route::get('/candidate-delete/{id}', [CandidateController::class , 'destroy'])->name('candidate.delete');

    Route::get('/votes', [VoteController::class , 'index'])->name('votes');
    Route::post('/vote-update/{id}', [VoteController::class , 'update'])->name('vote.update');
    Route::get('/vote-delete/{id}', [VoteController::class , 'destroy'])->name('vote.delete');

    Route::middleware(['admin'])->group(function () {

    });
});
