<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Post\BaseController;
use App\Models\Game;


class IndexController extends BaseController
{
    public function __invoke()
    {

        $games = Game::paginate(30);
        return view('game.index', compact('games'));
    }
}
