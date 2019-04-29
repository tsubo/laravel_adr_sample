<?php

namespace App\Forum\Domain\Services;

use App\App\Domain\ServiceInterface;
use App\Forum\Domain\Repositories\PostRepository;
use App\Forum\Domain\Repositories\TopicRepository;
use App\App\Domain\Payloads\ValidationPayload;
use App\App\Domain\Payloads\GenericPayload;

class CreateTopicService implements ServiceInterface
{
    protected $topics;
    protected $posts;

    public function __construct(TopicRepository $topics, PostRepository $posts)
    {
        $this->topics = $topics;
        $this->posts = $posts;
    }

    public function handle($data = [])
    {
        $validator = $this->validate($data);
        if ($validator->fails()) {
            return new ValidationPayload($validator->getMessageBag());
        }

        $topic = $this->topics->create(
            array_only($data, 'title')
        );

        $this->posts->create(
            $topic->id,
            array_only($data, 'body')
        );

        $topic->load('posts');

        return new GenericPayload($topic);
    }

    protected function validate($data)
    {
        return validator($data, [
            'title' => 'required',
            'body' => 'required'
        ]);
    }
}
