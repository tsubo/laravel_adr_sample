<?php

namespace App\Forum\Responders;

use App\App\Responders\ResponderInterface;

class CreateTopicResponder implements ResponderInterface
{
    public function respond($data)
    {
        return response()->json($data, 200);
    }
}
