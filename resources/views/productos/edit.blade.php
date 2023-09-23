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
            <textarea name="description" rows="5">{{old('description', $producto->description)}}</textarea>
        </label>

        @error('description')
        <br>
        <span class="invalid-feedback" role="alert">*{{$message}}</span>   
        <br>
        @enderror

       
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{old('category', $producto->category)}}">
        </label>

        @error('category')
        <br>
        <span>*{{$message}}</span>   
        <br>
        @enderror

        <br>
        <button  type="submit">Actualizar formulario</button>
    </form>

    {{-- <script>

        onclick="verificarInput()"

        function verificarInput() {
          var inputElement = document.getElementById("miInput");
          var resultadoElement = document.getElementById("resultado");
    
          if (inputElement.value === "") {
            resultadoElement.textContent = "El input está vacío.";
          } else {
            resultadoElement.textContent = "El input contiene un valor: " + inputElement.value;
          }
        }
      </script> --}}

    <br>
    <a href="{{route('productos.index')}}">Volver a Productos</a>
@endsection

