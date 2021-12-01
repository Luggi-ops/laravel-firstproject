@extends('layaout.plantilla')

@section('title', 'Cursos')

@section('content') 
    <h1>Bienvenidos  a la página principal de cursos.</h1>
    <a href={{route('cursos.create')}}>Crear curso</a>
    <ul>
        @foreach($cursos as $curso)

            <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a> {{$curso->category}}</li>

        @endforeach

        {{$cursos->links()}}
    </ul>
@endsection