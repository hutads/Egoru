<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Hobby;
use App\Models\Post;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index(){
        $training = Training::all();
        return view('training.index',compact('training'));

    }
    public function create()
    {
        return view('training.create');
    }

    public function store()
    {
        $data = request()->validate([
            'den' => 'string',
            'razminka' => 'string',
            'trenirovka' => 'string',
            'pushups' => 'string',

        ]);
        Training::create($data);
        return redirect()->route('training.index');
    }

    public function show(Training $training)
    {
        return view('training.show', compact('training'));
    }

    public function edit(Training $training)
    {
        return view('training.edit', compact('training'));
    }

    public function destroy(Training $training)
    {
        $training->delete();
        return redirect()->route('training.index');
    }
    public function update(Training $training)
    {
        $data = request() -> validate([
            'den' => 'string',
            'razminka' => 'string',
            'trenirovka' => 'string',

        ]);
        $training->update($data);
        return redirect() -> route('training.show',$training->id);
    }

}
