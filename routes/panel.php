<?php

Route::namespace('Panel')
    ->middleware(['auth.panel', 'auth',])
    ->prefix('panel')
    ->group(function ($panel) {

        #$panel->get('/', 'HomeController@index')->name('home_panel');
        #$panel->get('/home', 'HomeController@index')->name('home_panel');
        #$panel->get('/home', 'HomeController@index')->name('home');
        #$panel->get('/dashboard', 'HomeController@index')->name("dashboard");

        # rotas para panel

        #=============================================================
    });
