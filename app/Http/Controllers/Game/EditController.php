<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Post\BaseController;
use App\Models\Game;


class EditController extends BaseController
{
    public function __invoke(Game $game)
    {
        return view('game.edit', compact('game'));
    }
}
