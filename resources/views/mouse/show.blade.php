@extends('layouts.main')
@section('content')
    <div>
        <h1 class="display-6"> Название мышки: {{$mouse->name}} </a></h1>
    </div>
    <button type="submit" class="btn btn-outline-primary" ><a href="{{route('mouse.index', compact('mouse'))}}">Back</a></button>
    <h1></h1>
    <button type="button" class="btn btn-outline-primary" ><a href="{{route('mouse.edit', $mouse->id)}}">Edit</a></button>
    <h1></h1>
    <form action="{{route('mouse.delete', $mouse->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-primary" >Удалить</button>
    </form>
@endsection

