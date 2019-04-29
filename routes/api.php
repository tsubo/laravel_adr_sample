<?php

use Illuminate\Support\Facades\Route;
use App\Http\Actions\ListTopicAction;
use App\Http\Actions\CreateTopicAction;

Route::post('/topics', CreateTopicAction::class);
Route::get('/topics', ListTopicAction::class);
