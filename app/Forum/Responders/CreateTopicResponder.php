<?php

namespace App\Forum\Responders;

use App\Forum\Domain\Models\Topic;

class CreateTopicResponder
{
    public function respond(Topic $topic)
    {
        return response()->json($topic, 200);
    }
}
