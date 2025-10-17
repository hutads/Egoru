<?php

namespace App\Http\Controllers;

use App\Models\shirt;
use Illuminate\Http\Request;

class ShirtController extends Controller
{
    public function index()
    {
        $shirt = Shirt::all();
        return view('shirt.index', compact('shirt'));
    }
    public function create()
    {
        return view('shirt.create');
    }
    public function store()
    {
        $data = request()->validate([
            'name'=>'string',
        ]);
        shirt:: create($data);
        return redirect()->route('shirt.index');
    }
}
