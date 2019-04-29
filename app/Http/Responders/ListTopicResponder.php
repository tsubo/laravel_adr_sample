<?php

namespace App\Http\Responders;

class ListTopicResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        return response()->json($this->response->getData(), $this->response->getStatus());
    }
}
