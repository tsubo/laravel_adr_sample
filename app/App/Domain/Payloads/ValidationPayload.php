<?php

namespace App\App\Domain\Payloads;

class ValidationPayload
{
    protected $data;

    protected $status = 422;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return [
            'errors' => $this->data
        ];
    }

    public function getStatus()
    {
        return $this->status;
    }
}
