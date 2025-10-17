@extends('layouts.main')
@section('content')
<div>
    @foreach($shirt as $shirts)
        <div><a href="{{route('main.index')}}">{{$shirts->id}}. {{$shirts->name}}</a></div>
    @endforeach
    <a href="{{route('posts.index')}}">penis</a>
        <a href="{{route('shirt.create')}}">create</a>
</div>
@endsection
