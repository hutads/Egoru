@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('mouse.create')}}" method="post" >
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name">
                <label for="floatingInput">Mouse name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="yest">
                <label for="floatingPassword">Yest</label>
            </div>
            <h1></h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="count">
                <label for="floatingPassword">Count</label>
            </div>
            <h1></h1>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Отправить</button>
            </div>
        </form>
    </div>
@endsection

