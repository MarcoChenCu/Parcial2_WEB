@extends('layout/template')

@section('title', 'Ferretería - Categorías')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>Categorías</h2>
        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>!Santo guacamole!</strong> Revisa los valores ingresados.
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{url('Categorias')}}" method="post">
            @csrf
            <!-- Campos -->
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre de la categoría:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" required>
                </div>
            </div>           
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{url('Productos')}}" class="btn btn-secondary">Regresar</a>
        </form>
    </div>
</main>