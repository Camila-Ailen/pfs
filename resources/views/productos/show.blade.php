@extends('layouts.plantilla')

@section('title', 'Producto ' . $producto->name)

@section('content')
<h1>Bienvenido al producto {{$producto->name}}</h1>
<a href="{{route('productos.index')}}">Volver a Productos</a>
<br>
<a href="{{route('productos.edit', $producto)}}">Editar producto</a>
<p><strong>Categoria: </strong>{{$producto->category}}</p>
<p>{{$producto->description}}</p>
@endsection
