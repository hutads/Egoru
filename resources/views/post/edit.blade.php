@extends('layouts.main')
@section('content')
 <div>
     <form action="{{ route('post.update', $post->id) }}" method="post">
         @csrf
         @method('patch')
         <div class="mb-3">
             <label for="title" class="form-label">Title</label>
             <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
         </div>
         <div class="mb-3">
             <label for="content" class="form-label">Content</label>
             <textarea name="content" class="form-control" id="content" placeholder="Content">{{$post->content}}</textarea>
         </div>
         <div class="mb-3">
             <label for="image" class="form-label">Image</label>
             <input type="text" name="image" class="form-control" id="image" value="{{$post->image}}" placeholder="Image">
         </div>
         <div>
         <select class="form-select" aria-label="Default select example" name="category_id">
             <label for="content" class="form-label">Category</label>
             @foreach($categories as $category)
                 <option
                     {{$category->id === $post->category->id ? 'selected' : ''}}
                     value="{{$category->id}}">{{$category->title}}</option>
             @endforeach
         </select>
         </div>
         <h1></h1>
         <label for="tags" class="form-label">Tags</label>
         <select class="form-select" multiple aria-label="Multiple select example" id="tags" name="tags[]">
             @foreach($tags as $tag)
                 <option
                     @foreach($post->tags as $postTag)
                     {{$tag->id === $postTag->id ? 'selected' : ''}}

                     @endforeach
                     value="{{$tag->id}}">{{$tag->title}}</option>
             @endforeach
         </select>
         <h1></h1>
         <button type="submit" class="btn btn-primary">Update</button>
     </form>
</div>
@endsection
