<?php

use Illuminate\Support\Facades\Route;

Route::post('/login', 'API\AuthController@login');
Route::post('/register', 'API\AuthController@register');

Route::resource('/posts', API\PostController::class)->middleware('auth:sanctum');
Route::resource('/friends', API\FriendController::class)->middleware('auth:sanctum');
Route::resource('/suggested', API\SuggestedController::class)->middleware('auth:sanctum');

Route::get('/content/{topicID}', 'API\ContentController@index');
Route::resource('/content', API\ContentController::class);

Route::resource('/topics', API\TopicController::class);
