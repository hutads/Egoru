@extends('layouts.main')
@section('content')
    <div>
        @foreach($mice as $mouse)
            <h1 class="display-6"> Gaming mouse: <a href="{{route('mouse.show', $mouse->id)}}">{{ $mouse->name}}</a></h1>
        @endforeach
    </div>
    <div>
        <button type="button" class="btn btn-outline-primary" ><a href="{{route('mouse.create', compact('mice'))}}">Add</a></button>
    </div>
@endsection

