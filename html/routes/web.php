<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/* Common pages */
Route::get('/', 'IndexController')->name('home');

Route::group(['namespace' => 'Mail'], function() {
    Route::post('/main-form-send', 'MainMailController')->name('main.mail.send');
});

Route::group(['namespace' => 'Pages'], function() {
    Route::get('/acheter-appartement-paris-ile-de-france', 'AcheterAppartementParisIleDeFranceController')->name('acheterAppartementParisIleDeFrance');
    Route::get('/immobilier-neuf-ile-de-france', 'ImmobilierNeufIleDeFranceController')->name('immobilierNeufIleDeFrance');
    Route::get('/investissement-locatif-paris-ile-de-france', 'InvestissementLocatifParisIleDeFranceController')->name('investissementLocatifParisIleDeFrance');
    Route::get('/contact-la-fabrique-a-toits', 'ContactLaFabriqueAToitsController')->name('contactLaFabriqueAToits');
    Route::get('/information-agence-chasseur-immobilier-paris-ile-de-france', 'InformationAgenceChasseurImmobilierParisIleDeFranceController')->name('informationAgenceChasseurImmobilierParisIleDeFrance');
    Route::get('/vendre-acheter-bien-immobilier-paris-ile-de-france', 'VendreAcheterBienImmobilierParisIleDeFranceController')->name('vendreAcheterBienImmobilierParisIleDeFrance');
    Route::get('/agence-immobiliere-hauts-de-seine-92-top-10-villes-investissement-immo', 'AgenceImmobiliereDautsDeSeine92Controller')->name('agenceImmobiliereDautsDeSeine92');
    Route::get('/equipe-chasseur-maison-appartement-ile-de-france', 'EquipeChasseurMaisonAppartementIleDeFranceController')->name('equipeChasseurMaisonAppartementIleDeFrance');
    Route::get('/immobilier-ancien-paris-IDF', 'ImmobilierAncienParisIDFController')->name('immobilierAncienParisIDF');
    Route::get('/cgu', 'CguController')->name('cgu');
    Route::get('/confidentialite', 'ConfidentialiteController')->name('confidentialite');
    Route::get('/cgv', 'CgvController')->name('cgv');

    /* Blog */
    Route::group(['namespace' => 'Blog', 'prefix' => 'agence-immobiliere-nanterre-paris-17-actualités'], function() {
        Route::get('/', 'IndexController')->name('blog.index');
    });
    Route::group(['namespace' => 'Blog', 'prefix' => 'actualites-agence-chasseur-appartement-paris-92-idf'], function() {
        Route::get('/{catgory}/blog-single', 'ShowController')->name('blog.show');
    });
    Route::group(['namespace' => 'Housing', 'prefix' => 'immobilier-neuf-ile-de-france'], function() {
        Route::get('/{dpt_slug}/programme-immobilier-appartement-neuf', 'ShowController');
    });

    /* Chasseur */
    Route::group(['namespace' => 'Chasseur'], function () {
        Route::get('/chasseur-immobilier-appartement-{url_index}', 'ChasseurItemController')->name('chasseur.item.show');
        Route::get('/chasseur-immobilier-{url_index}', 'ChasseurController')->name('chasseur.show');
    });
    /* Immo Neuf */
    Route::group(['namespace' => 'ImmoNeuf'], function() {
        Route::get('/immobilier-neuf-ile-de-france/maison-appartement-neuf-programme-{url_index}', 'ImmoNeufController')->name('immoneuf.show');
    });
});

/* Administration */
Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/', 'IndexController')->name('admin.index');

    Route::group(['prefix' => 'programme'], function() {
        Route::get('/', 'ProgrammeController@index')->name('admin.programme.index');
        Route::get('/create', 'ProgrammeController@create')->name('admin.programme.create');
        Route::post('/store', 'ProgrammeController@store')->name('admin.programme.store');
        Route::get('/edit/{habitation}', 'ProgrammeController@edit')->name('admin.programme.edit');
        Route::patch('/update/{habitation}', 'ProgrammeController@update')->name('admin.programme.update');
        Route::delete('/delete/{habitation}', 'ProgrammeController@delete')->name('admin.programme.delete');
    });
    Route::group(['prefix' => 'blog'], function() {
        Route::get('/', 'BlogController@index')->name('amdin.blog.index');
        Route::get('/create', 'BlogController@create')->name('amdin.blog.create');
        Route::post('/store', 'BlogController@store')->name('amdin.blog.store');
        Route::get('/edit/{blog}', 'BlogController@edit')->name('amdin.blog.edit');
        Route::patch('/update/{blog}', 'BlogController@update')->name('amdin.blog.update');
        Route::delete('/delete/{blog}', 'BlogController@delete')->name('amdin.blog.delete');
    });
});


Auth::routes();

Route::group(['namespace' => 'ServiceRoutes'], function() {
    Route::get('/optimize', 'ServiceController@optimize');
    Route::get('/migrate', 'ServiceController@migrate');
    Route::get('/migrate-rollback', 'ServiceController@migrate_rollback');
});
