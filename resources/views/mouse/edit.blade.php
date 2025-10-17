@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('mouse.update', $mouse->id)}}" method="post" >
            @csrf
            @method('patch')
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" value="{{$mouse->name}}">
                <label for="floatingInput">Mouse name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="yest" value="{{$mouse->yest}}">
                <label for="floatingPassword">Yest</label>
            </div>
            <h1></h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="count" value="{{$mouse->count}}">
                <label for="floatingPassword">Count</label>
            </div>
            <h1></h1>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Изменить</button>
            </div>
        </form>
    </div>
@endsection

