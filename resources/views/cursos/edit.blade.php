@extends('layaout.plantilla');

@section('title', 'Cursos')


@section('content') 
    <h1>Editar curso {{$curso->name}}.</h1>
    <form action="{{route('cursos.update', $curso->id)}}" method="POST">

        @csrf
        @method('PUT')
        
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            <p>*{{$message}}</p>
        @enderror

        <label>
            Descripción:
            <textarea name="description" cols="30" rows="10">{{old('name', $curso->description)}}</textarea>
        </label>
        @error('description')
            <p>*{{$message}}</p>
        @enderror

        <label>
            Categoría:
            <input type="text" name="category" value="{{old('name', $curso->category)}}">
        </label>
        @error('category')
            <p>*{{$message}}</p>
        @enderror
        
        <button type="submit" class="btn">Actualizar curso</button>
    </form>
@endsection