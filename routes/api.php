<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\QueriesViewController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/get/user/{id}', function ($id) {return User::find($id);});
Route::post('/login', [AuthController::class,'login']);
Route::get('/get/all/department',[QueriesViewController::class,'GetAllDepartment']);
Route::get('/get/all/units',[QueriesViewController::class,'GetAllUnits']);
Route::get('/get/all/items',[QueriesViewController::class,'GetAllItems']);
