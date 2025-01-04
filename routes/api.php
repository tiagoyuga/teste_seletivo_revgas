<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function () {
    return "Aoba, funcionou";
});

Route::namespace('Api')
    ->middleware([])
    ->group(function ($api) {

        $api->get('bank', 'ApiBankController@index');



        #$api->resource('clinic', ApiClinicController::class);
        #$api->resource('setting', ApiSettingController::class);
        #$api->resource('service_type', ApiServiceTypeController::class);

    });

