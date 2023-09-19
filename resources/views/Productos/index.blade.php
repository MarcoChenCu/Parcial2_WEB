@extends('layout/template')

@section('title', 'Ferreteria - Inicio')

@section('contenido')
<main>
    <div class="container py-4">
        <h2>Productos</h2>
        <a href="{{url('Categorias')}}" class="btn btn-primary btn-sm">Nueva categoria</a> 
        <a href="{{url('Productos/create')}}" class="btn btn-primary btn-sm">Nuevo producto</a> 
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Categoría</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</main>