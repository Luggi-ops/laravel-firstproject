@extends('layaout.plantilla')

@section('title', "Curso de $curso")

@section('content') 
    <h1>Bienvenido al curso de {{$curso->name}}</h1>
    <a href="{{route('cursos.edit', $curso)}}" class="btn">Editar curso</a>
    <p>{{$curso->category}}</p>
    <p>{{$curso->description}}</p>

    <form action={{route('cursos.destroy', $curso->id)}} method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Borrar" class="btn"/>
    </form>
@endsection