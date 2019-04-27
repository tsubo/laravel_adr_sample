<?php

namespace App\Forum\Actions;

use Illuminate\Http\Request;
use App\Forum\Responders\CreateTopicResponder;
use App\Forum\Domain\Repositories\TopicRepository;

class CreateTopicAction
{
    protected $topics;
    protected $responder;

    public function __construct(TopicRepository $topics, CreateTopicResponder $responder)
    {
        $this->topics = $topics;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        $topic = $this->topics->create($request->only('title'));

        return $this->responder->respond($topic);
    }
}
