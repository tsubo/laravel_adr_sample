<?php

namespace App\Http\Actions;

use Illuminate\Http\Request;
use App\Http\Responders\CreateTopicResponder;
use App\Domain\Services\CreateTopicService;

class CreateTopicAction
{
    protected $service;
    protected $responder;

    public function __construct(CreateTopicService $service, CreateTopicResponder $responder)
    {
        $this->service = $service;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        $topic = $this->service->handle($request->only('title', 'body'));

        return $this->responder->withResponse($topic)->respond();
    }
}
