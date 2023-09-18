@extends('layouts.plantilla')

@section('title', 'Productos create')

@section('content')
    <h1>En esta pagina se pueden crear los productos</h1>
    <form action="{{route('productos.store')}}" method="POST">
        
        @csrf
        
        <label>
            Nombre:

            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
        <br>
        <span>*{{$message}}</span>   
        <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{old('description')}}</textarea>
        </label>

        @error('description')
        <br>
        <span>*{{$message}}</span>   
        <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
        <br>
        <span>*{{$message}}</span>   
        <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

