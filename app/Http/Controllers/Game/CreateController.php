<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Post\BaseController;


class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('game.create');

    }
}
