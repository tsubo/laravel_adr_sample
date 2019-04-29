<?php

namespace App\Domain\Services;

use App\Domain\Repositories\TopicRepository;
use App\Domain\Payloads\GenericPayload;

class ListTopicService implements ServiceInterface
{
    public function __construct(TopicRepository $topics)
    {
        $this->topics = $topics;
    }

    public function handle($data = [])
    {
        return new GenericPayload($this->topics->all());
    }
}
