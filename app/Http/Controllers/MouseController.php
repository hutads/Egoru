<?php
namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Hobby;
use App\Models\Post;
use App\Models\Mouse;
use Illuminate\Http\Request;

class MouseController extends Controller
{
    public function index()
    {
        $mice = Mouse::all();
        return view('mouse.index', compact('mice'));
    }
    public function create()
    {
        return view('mouse.create');
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
            'yest' => 'boolean',
            'count' => 'integer',
        ]);
        Mouse::create($data);
        return redirect()->route('mouse.index');
    }

    public function show(Mouse $mouse)
    {
        return view('mouse.show', compact('mouse'));
    }
    public function edit(Mouse $mouse)
    {
        return view('mouse.edit', compact('mouse'));
    }
    public function update(Mouse $mouse)
    {
        $data = request()->validate([
            'name' => 'string',
            'yest' => 'boolean',
            'count' => 'integer',
        ]);
        $mouse->update($data);
        return redirect()->route('mouse.show', $mouse->id);
    }
    public function destroy(Mouse $mouse)
    {
        $mouse->delete();
        return redirect()->route('mouse.index');
    }
}
