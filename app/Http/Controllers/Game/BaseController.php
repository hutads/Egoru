<?php

namespace App\Http\Controllers\Game;

use App\Services\Post\Service;

class BaseController
{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
