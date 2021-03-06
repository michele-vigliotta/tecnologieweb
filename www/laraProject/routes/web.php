<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AnnuncioController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\MessaggioController;
use App\Http\Controllers\PrenotazioneController;
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

#Home
Route::get('/', function () {return view('pages.home.index');});
Route::get('/', 'HomeController@index')->name('index');
Route::get('/homeutente', [UserController::class, 'homeutente'])->name('homeutente')->middleware('auth');
Route::get('/homeadmin', [UserController::class, 'homeadmin'])->name('homeadmin')->middleware('auth');

#Pagine Generali
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/why', 'HomeController@why')->name('why');

#Autentication Route
Route::get('/login', 'HomeController@login')->name('login');
    Route::post('user', [UserController::class, 'checkLogin']);
Route::get('/signup', 'HomeController@signup')->name('signup');
    Route::post('register', [RegistrationController::class, 'store']);
Route::get('/logout', 'LogoutController@logout')->name('logout');

#Catalogo
Route::get('/catalogo', 'AnnuncioController@catalogo')->name('catalogo');
Route::get('/dettagli/{id}', 'AnnuncioController@dettagli')->name('dettagli');
Route::post('filterCatalog', [AnnuncioController::class, 'filterCatalog'])->name('filterCatalog');

#Annunci
Route::get('/annunci', 'HomeController@annunci')->name('annunci');
Route::get('/aggAnnuncio', 'AnnuncioController@aggiungiAnnuncio')->name('aggAnnuncio');
    Route::post('addAnnuncio', [AnnuncioController::class, 'addAnnuncio']);
Route::get('/annuncioedit/{id}', 'AnnuncioController@annuncioedit')->name('annuncioedit');//vista modifica faq
    Route::put('annuncioupdate/{id}', 'AnnuncioController@annuncioupdate')->name('annuncioupdate');
    Route::get('annunciodelete/{id}','AnnuncioController@annunciodelete')->name('annunciodelete');


#Profilo
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
    Route::get('/profileedit', [UserController::class, 'profileedit'])->name('profileedit')->middleware('auth');
        Route::post('update', [UserController::class, 'update']);

#FAQ
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('faqadd', 'FAQController@faqadd')->name('faqadd');
    Route::post('faqsave', [FAQController::class, 'faqsave']);
Route::get('/faqedit/{id}', 'FAQController@faqedit')->name('faqedit');//vista modifica faq
    Route::put('faqupdate/{id}', 'FAQController@faqupdate')->name('faqupdate');//rotta update faq
    Route::get('faqdelete/{id}','FAQController@faqdelete')->name('faqdelete');

#Chat
Route::get('/chat', 'HomeController@chat')->name('chat');
Route::get('nuovomessaggio', 'MessaggioController@nuovomessaggio')->name('nuovomessaggio');
Route::post('sendMessage', [MessaggioController::class, 'sendMessage']);
Route::get('/messaggi/{id}/{username}', 'MessaggioController@aprichat')->name('messaggi');
Route::put('reply/{username}', 'MessaggioController@reply')->name('reply');

#Prenotazioni e request
Route::put('confermaprenotazione/{id_annuncio}', [PrenotazioneController::class, 'confermaprenotazione'])->name('confermaprenotazione');
Route::get('/eliminaprenotazione', 'PrenotazioneController@eliminaprenotazione')->name('eliminaprenotazione');
//Route::post('prenota', [AnnuncioController::class, 'prenota'])->name('prenota');
Route::get('/prenota', 'PrenotazioneController@prenota')->name('prenota'); //rotta per generare nuova richiesta
Route::get('/richieste', 'PrenotazioneController@richieste')->name('richieste');

#Statistiche
Route::get('/stats', 'StatsController@getStat')->name('stats');

