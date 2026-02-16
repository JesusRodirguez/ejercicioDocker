<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

Route::apiResource('reservas', ReservaController::class);
