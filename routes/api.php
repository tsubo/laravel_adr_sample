<?php

use App\Forum\Actions\CreateTopicAction;

Route::post('/topics', CreateTopicAction::class);
