<?php

use Illuminate\Support\Facades\Route;
use App\Forum\Actions\ListTopicAction;
use App\Forum\Actions\CreateTopicAction;

Route::post('/topics', CreateTopicAction::class);
Route::get('/topics', ListTopicAction::class);
