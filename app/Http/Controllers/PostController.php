<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();
         return view('posts.index',compact('posts'));
    }
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request() -> validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',

        ]);
        $tags = $data['tags'];
        unset($data['tags']);


        $post = Post::create($data);

          $post->tags()->attach($tags);

        return redirect() -> route('posts.index');
    }

    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit',compact('post','categories','tags'));
    }

    public function update(Post $post)
    {
        $data = request() -> validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect() -> route('post.show',$post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect() -> route('posts.index');
    }
    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
    }
    public function restore()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
    }
    public function firstOrCreate()
    {

        $anotherPost = [
            'title' => 'regular post',
            'content' => 'fucking text',
            'image' => 'imagePenis.jpg',
            'likes' => 777,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title'=>'regular post',
        ],[
            'title' => 'regular post',
            'content' => 'fucking text',
            'image' => 'imagePenis.jpg',
            'likes' => 777,
            'is_published' => 1,
        ]);
        dump($post->id);
        dd('fineshed');
    }
    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'Penis post',
            'content' => 'penis',
            'image' => 'imagePenis.jpg',
            'likes' => 228,
            'is_published' => 0,
        ];
        $post = Post::updateOrCreate([
            'is_published'=>'0'
        ],[
            'title' => 'lolich',
            'content' => 'regular content',
            'image' => 'Penis.jpg',
            'likes' => 2131,
            'is_published' => 0,
        ]);
        dump($post->title);
        dd('updated');
    }

}
