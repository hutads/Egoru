@extends('layouts.train')
@section('tren')
    <div>
        <div>
            <a href="{{route('training.create')}}" class="btn btn-primary mb-3">Add one</a>
        </div>
        @foreach($training as $post)
            <div><a href="{{ route('training.show', $post->id) }}">{{$post->id}}. {{$post->den}}</a></div>
        @endforeach
    </div>
@endsection
