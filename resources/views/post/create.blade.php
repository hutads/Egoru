@extends('layouts.main')
@section('content')
 <div>
     <form action="{{ route('post.store') }}" method="post">
         @csrf
         <div class="mb-3">
             <label for="title" class="form-label">Title</label>
             <input
                 value="{{old('title')}}"
                 type="text" name="title" class="form-control" id="title" placeholder="title">



             @error('title')
             <p class="text-danger">{{$message}}</p>
             @enderror
         </div>
         <div class="mb-3">

             <label for="content" class="form-label">Content</label>
             <input value="{{old('content')}}" name="content" class="form-control" id="content" placeholder="Content"></input>

             @error('content')
             <p class="text-danger">{{$message}}</p>
             @enderror
         </div>
         <div class="mb-3">
             <label for="image" class="form-label">Image</label>
             <input type="text" name="image" class="form-control" id="image" placeholder="Image"
                    value="{{old('image')}}">
             @error('image')
             <p class="text-danger">{{$message}}</p>
             @enderror
         </div>
         <label for="content" class="form-label">Category</label>
     <select class="form-select" aria-label="Default select example" name="category_id">
         @foreach($categories as $category)
         <option
             {{old('category_id') == $category->id ? 'selected': ''}}

             value="{{$category->id}}">{{$category->title}}</option>
         @endforeach
     </select>
         <h1></h1>
         <label for="tags" class="form-label">Tags</label>
         <select class="form-select" multiple aria-label="Multiple select example" id="tags" name="tags[]">
             @foreach($tags as $tag)
             <option value="{{$tag->id}}">{{$tag->title}}</option>
             @endforeach
         </select>
         <h1></h1>
         <button type="submit" class="btn btn-primary">Create</button>
     </form>
</div>
@endsection
