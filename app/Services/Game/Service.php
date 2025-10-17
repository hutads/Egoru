<?php

namespace App\Services\Game;

use App\Models\Game;

class Service
{
    public function update(Game $game)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);
        $game->update($data);
        return redirect()->route('games.show',  $game->id);
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
        ]);
        Game::create($data);
        return redirect()->route('games.index');

    }
}
