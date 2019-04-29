<?php

namespace App\Http\Actions;

use Illuminate\Http\Request;
use App\Http\Responders\ListTopicResponder;
use App\Domain\Services\ListTopicService;

class ListTopicAction
{
    protected $service;
    protected $responder;

    public function __construct(ListTopicService $service, ListTopicResponder $responder)
    {
        $this->service = $service;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        $topic = $this->service->handle();

        return $this->responder->withResponse($topic)->respond();
    }
}
