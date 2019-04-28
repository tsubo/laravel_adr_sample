<?php

namespace App\Forum\Responders;

use App\App\Responders\ResponderInterface;
use App\App\Responders\Responder;

class CreateTopicResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        return response()->json($this->response, 200);
    }
}
