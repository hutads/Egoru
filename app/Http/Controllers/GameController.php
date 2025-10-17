<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Post;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::paginate(30);
        return view('game.index', compact('games'));
    }

    public function create()
    {
        return view('game.create');

    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
        ]);
        Game::create($data);
        return redirect()->route('games.index');

    }
    public function show(Game $game)
    {
        return view('game.show', compact('game'));
    }
    public function edit(Game $game)
    {
        return view('game.edit', compact('game'));
    }
    public function update(Game $game)
    {
        $data = request()->validate([
            'title' => 'string',
        ]);
        $game->update($data);
        return redirect()->route('games.show',  $game->id);
    }
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}
