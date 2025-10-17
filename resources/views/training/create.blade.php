@extends('layouts.train')
@section('tren')
    <div>
        <form action="{{ route('training.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="den" class="form-label">День недели</label>
                <input type="text" name="den" class="form-control" id="den" placeholder="Imput day">
            </div>
            <div class="mb-3">
                <label for="razminka" class="form-label">Разминка</label>
                <textarea name="razminka" class="form-control" id="razminka" placeholder="Bilali Razminka"></textarea>
            </div>
            <div class="mb-3">
                <label for="trenirovka" class="form-label">Тренировка</label>
                <input type="text" name="trenirovka" class="form-control" id="trenirovka" placeholder="Bilali Trenirovka">
            </div>
            <div class="mb-3">
                <label for="pushups" class="form-label">Отжимания</label>
                <input type="text" name="pushups" class="form-control" id="pushups" placeholder="Count">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
