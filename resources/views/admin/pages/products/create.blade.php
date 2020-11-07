@extends('admin.layouts.template')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
    <li>{{$error}}</li>        
        @endforeach
    </ul>
    @endif

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="name" id="name" placeholder="Nome:" value="{{old('name')}}">
        <input type="text" name="description" id="description" placeholder="Descrição:"  value="{{old('description')}}">
        <input type="file" name="photo">
        <button type="submit">Enviar</button>
    </form>
@endsection



@push('styles')
    <style>
    input{
        display: flex;

    }
</style>
@endpush