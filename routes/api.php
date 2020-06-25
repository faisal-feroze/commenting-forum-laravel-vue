<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::post('login', 'AuthController@login');
Route::apiResource('question','QuestionController');
Route::apiResource('category','CategoryController');
