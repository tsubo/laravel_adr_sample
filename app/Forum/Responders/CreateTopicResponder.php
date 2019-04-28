<?php

namespace App\Forum\Responders;

use App\App\Responders\Responder;
use App\App\Responders\ResponderInterface;

class CreateTopicResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        return response()->json($this->response, 200);
    }
}
