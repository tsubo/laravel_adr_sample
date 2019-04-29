<?php

namespace App\Domain\Repositories;

use App\Domain\Models\Topic;

class TopicRepository
{
    public function all()
    {
        return Topic::get();
    }

    public function create($data)
    {
        return Topic::create($data);
    }
}
