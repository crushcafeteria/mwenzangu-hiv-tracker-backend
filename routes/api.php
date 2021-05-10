<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'API\AuthController@login');

Route::resource('/posts', API\PostController::class)->middleware('auth:sanctum');
Route::resource('/friends', API\FriendController::class)->middleware('auth:sanctum');
Route::resource('/suggested', API\SuggestedController::class)->middleware('auth:sanctum');
Route::resource('/content', API\ContentController::class);
Route::resource('/topic', API\TopicController::class);
