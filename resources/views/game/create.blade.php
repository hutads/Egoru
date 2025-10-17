@extends ('layouts.main')
@section('content')
<div>
    <form action="{{route('games.store')}}" method="post">
    @csrf
    <div class="input-group has-validation">
        <span class="input-group-text">@</span>
        <div class="form-floating is-invalid">
            <input type="text" name="title" class="form-control is-invalid" id="floatingInputGroup2" placeholder="Gamename" required>
            <label for="title">Gamename</label>
        </div>
        <div class="invalid-feedback">
            Please input game name.
        </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="submit">Отправить</button>
    </div>
    </div>
    </form>
</div>
@endsection

