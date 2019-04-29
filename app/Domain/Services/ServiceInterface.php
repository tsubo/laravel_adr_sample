<?php

namespace App\Domain\Services;

interface ServiceInterface
{
    public function handle($data = []);
}
