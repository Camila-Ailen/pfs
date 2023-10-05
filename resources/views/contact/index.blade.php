@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejar un mensaje</h1>

    <form action="{{route('contact.store')}}" method="POST">
        @csrf
        
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label for="">
            Correo:
            <br>
            <input type="text" name="correo">
        </label>

        <br>
        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>

        <br>

        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
        
    @endif

@endsection

