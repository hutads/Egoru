@extends('layouts.main')
@section('content')
    <form action="{{route('shirt.store')}}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" >
            <label for="floatingInput">Shirt name</label>
        </div>
        <button type="submit" class="btn btn-link">create</button>
    </form>
@endsection
