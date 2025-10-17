<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Hobby;
use App\Models\Post;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index(){
        $hobbies = Hobby::Where('is_been_there', 1)->get();
        foreach ($hobbies as $hobby){
            echo 'days where been there - ';
            dump ($hobby->id);
        }
    }
}
