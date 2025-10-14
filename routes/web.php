<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellersController;
use App\Http\Controllers\ChatsSupportController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\ComplaintsController;
use App\Http\Controllers\PublicationsUsersController;
use App\Http\Controllers\OrmController;

Route::get('/', function () {
    return view('welcome');
});


    Route::get('consulta', [OrmController::class, 'consulta']);
