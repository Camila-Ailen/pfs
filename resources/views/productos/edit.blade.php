@extends('layouts.plantilla')

@section('title', 'Productos edit')

@section('content')
    <h1>En esta pagina se pueden editar un producto</h1>
    <form action="{{route('productos.update', $producto)}}" method="POST">
        
        @csrf
        @method('put')
        
        <label>
            Nombre:

            <br>
            <input type="text" name="name" value="{{old('name', $producto->name)}}">
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
            <textarea name="descripcion" rows="5">{old('descripcion', $producto->description)}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria', $producto->category)}}">
        </label>

        @error('category')
        <br>
        <span>*{{$message}}</span>   
        <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection

