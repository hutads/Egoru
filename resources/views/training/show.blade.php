@extends('layouts.train')
@section('tren')
    <div>
        <div>{{$training->id}}. {{$training->den}}</div>
                <div> Былали разминка - {{$training->razminka}}</div>
                    <div>  Былали тренировка - {{$training->trenirovka}}</div>
        <div>Кол-во отживаний: {{$training->pushups}}</div>
    </div>
    <div>
        <a href="{{route('training.edit',$training->id)}}">Edit</a>
    </div>
    <div>
        <form action="{{route('training.delete', $training->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{route ('training.index')}}">Back</a>
    </div>
@endsection
