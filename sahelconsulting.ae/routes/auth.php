<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\SLiderController;
use App\Http\Controllers\Apropos1Controller;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\Service1Controller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\DirecteurController;
use App\Http\Controllers\ContactController;

Route::middleware('guest')->group(function () {


    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');


    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');


});



Route::get('/', [AcceuilController::class, 'index'])->name('acceuil.index');
Route::get('/actualites', [ActualiteController::class, 'index'])->name('actualites.index');
Route::get('/apropos', [AproposController::class, 'index'])->name('apropos.index');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/actualites/{slug}', [ActualiteController::class, 'show'])->name('actualites.show');

Route::get('/projets', [ProjetController::class, 'index'])->name('projets.index');
Route::get('/projets/{id}', [ProjetController::class, 'show'])->name('projets.show');


Route::middleware('guest')->group(function () {
    // ...

    // Route d'inscription (création de compte utilisateur)
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);
});


Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

                
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

                Route::resource('sliders', SLiderController::class);
                Route::resource('aproposs', Apropos1Controller::class);
                Route::resource('realisations', RealisationController::class);
                Route::resource('service', Service1Controller::class);
                Route::resource('equipes', EquipeController::class);
                Route::resource('directeurs', DirecteurController::class);


                Route::get('/actuality', [ActualiteController::class, 'home'])->name('actualites.home');
                Route::get('/actualite/create', [ActualiteController::class, 'create'])->name('actualite.create');
                Route::post('/actualites', [ActualiteController::class, 'store'])->name('actualites.store');
                Route::get('/actualites/{actualite}/edit', [ActualiteController::class, 'edit'])->name('actualites.edit');
                Route::put('/actualites/{actualite}', [ActualiteController::class, 'update'])->name('actualites.update');
                Route::delete('/actualites/{actualite}', [ActualiteController::class, 'destroy'])->name('actualites.destroy');

                Route::get('/project', [ProjetController::class, 'home'])->name('project.home');
                Route::get('/project/create', [ProjetController::class, 'create'])->name('project.create');
                Route::post('/projets', [ProjetController::class, 'store'])->name('projets.store');
                Route::get('/projets/{id}/edit', [ProjetController::class, 'edit'])->name('projets.edit');
                Route::put('/projets/{id}', [ProjetController::class, 'update'])->name('projets.update');
                Route::delete('/projets/{id}', [ProjetController::class, 'destroy'])->name('projets.destroy');

                Route::get('/about', [AproposController::class, 'home'])->name('about.home');
                Route::get('/apropos/create', [AproposController::class, 'create'])->name('apropos.create');
                Route::post('/apropos', [AproposController::class, 'store'])->name('apropos.store');
                Route::get('/apropos/{id}/edit', [AproposController::class, 'edit'])->name('apropos.edit');
                Route::put('/apropos/{id}', [AproposController::class, 'update'])->name('apropos.update');
                Route::delete('/apropos/{id}', [AproposController::class, 'destroy'])->name('apropos.destroy');

                Route::get('/contacts', [ContactController::class, 'home'])->name('contacts.home');
                Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
                Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');




});

