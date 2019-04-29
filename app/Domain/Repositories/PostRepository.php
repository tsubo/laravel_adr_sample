<?php

namespace App\Domain\Repositories;

use App\Domain\Models\Post;

class PostRepository
{
    public function create($topicId, $data)
    {
        return Post::create(array_merge($data, ['topic_id' => $topicId]));
    }
}
