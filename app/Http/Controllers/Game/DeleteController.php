<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Post\BaseController;
use App\Models\Game;


class DeleteController extends BaseController
{
    public function __invoke(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
