@extends('layaout.plantilla')

@section('title', 'Cursos')


@section('content') 
    <h1>Aquí podrás crear tus cursos.</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf
        
        <label>
            Nombre:
            <input type="text" name="name" value={{old('name')}}>
        </label>
        @error('name')
            <p>*{{$message}}</p>
        @enderror

        <label>
            Descripción:
            <textarea name="description" cols="30" rows="10" >{{old('description')}}</textarea>
        </label>
        @error('description')
            <p>*{{$message}}</p>
        @enderror

        <label>
            Categoría:
            <input type="text" name="category" value={{old('category')}}>
        </label>
        @error('category')
            <p>*{{$message}}</p>
        @enderror
        
        <button type="submit" class="btn">Crear curso</button>
    </form>
@endsection