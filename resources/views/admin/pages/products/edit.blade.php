@extends('admin.layouts.template')

@section('title', 'Editar Produto')

@section('content')
    <h1>Editar Produto</h1>

    <form action="{{route('products.update', $id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" placeholder="Nome:">
        <input type="text" name="description" id="description" placeholder="Descrição:">
        <button type="submit">Enviar</button>
    </form>
@endsection