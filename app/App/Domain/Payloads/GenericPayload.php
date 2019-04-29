<?php

namespace App\App\Domain\Payloads;

class GenericPayload
{
    protected $data;

    protected $status = 200;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
