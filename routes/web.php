<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DancersControllers;
use App\Http\Controllers\EnrolmentController;
use App\Http\Controllers\ExpController;
use App\Http\Controllers\TeachersControllers;
use App\Http\Controllers\TypesControllers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/invoices',[InvoiceController::class,'index']);
Route::get('/invoice_create',[InvoiceController::class,'create']);
Route::get('/dance_types',[TypesControllers::class,'index']);
Route::get('/dance_enrolment',[EnrolmentController::class,'index']);
Route::get('/dance_experience',[ExpController::class,'index']);
Route::get('/dancers',[DancersControllers::class,'index']);
Route::get('/dance_teachers',[TeachersControllers::class,'index']);