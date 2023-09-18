@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')
    <h1>Bienvenidos a la pagina productos</h1>
    <a href="{{route('productos.create')}}">Crear producto</a>
    <ul>
        @foreach ($productos as $producto)
            <li>
                <a href="{{route('productos.show', $producto->id)}}">{{$producto->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$productos->links()}}

@endsection

