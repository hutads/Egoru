<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Post;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index(){
        $post = Day:: Where('id',2)->get();
        foreach ($post as $posts){
            dump($posts->morning);
            dump($posts->breakfast);
            dump($posts->evening);
            dump($posts->lunch);
            dump($posts->dinner);
            dump($posts->snack);
        }
    }
}
