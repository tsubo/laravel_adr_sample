<?php

namespace App\Forum\Domain\Services;

use App\App\Domain\ServiceInterface;
use App\Forum\Domain\Repositories\TopicRepository;
use App\App\Domain\Payloads\ValidationPayload;
use App\App\Domain\Payloads\GenericPayload;

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
