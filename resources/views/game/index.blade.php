@extends ('layouts.main')
@section('content')
<div>
    @foreach($games as $game)
        <div> Игра в которую играл: <a href="{{route('games.show', $game->id)}}"> {{$game->title}}</a></div>
    @endforeach
</div>
    <div>
        <a href="{{route('games.create', compact('games'))}}"
           class="btn btn-primary btn-sm">Добавить</a>
    </div>
<div class="mt-3">
    {{$games->links()}}
</div>

@endsection

