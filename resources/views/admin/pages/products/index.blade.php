@extends('admin.layouts.template')

@section('title', 'Listagem de Produtos')
@section('content')
    <h1>Exibindo os Produtos</h1>

<a href="{{route('products.create')}}">Cadastrar</a>

    <hr>
    @component('admin.components.card')
    @slot('title')
        <h1>Titulo Card</h1>
    @endslot
        Um card de exemplo
    @endcomponent
 
    @component('admin.components.card')
    @slot('title')
        <h1>Titulo Card2</h1>
    @endslot
        Um card de exemplo2
    @endcomponent

    

    <hr>
    @include('admin.includes.alerts',['content' => 'Alerta de preços de produtos'])

    <hr>
    @if (isset($products))
        @foreach ($products as $product)
            <p class="@if($loop->last) last @endif">{{ $product }}</p>
        @endforeach
    @endif
    <hr>

    @forelse ($products as $product)
        <p  class="@if($loop->first) last @endif">{{ $product }}</p>
    @empty
        <p>Não existem produtos cadastrados</p>
    @endforelse

    <hr>

    @if ($teste === '123')
        É Igual
    @elseif($teste === 123)
        é Igual a 123
    @else
        é diferente
    @endif

    @unless($teste === '123')
        asdasdsdas
    @else
        aaaaaaaaa
    @endunless

    @isset($teste2)
        <p>
            {{ $teste2 }}
        </p>
    @endisset

@empty($teste3)
    <p>
        Vazio...
    </p>
@endempty

@auth
    <p>Autenticado</p>
@else
    <p>Não autenticado</p>
@endauth

@guest
    <p>Não autenticado</p>
@endguest


@switch($teste)
    @case(1)
    Igual 1
    @break
    @case(2)
    Igual 2
    @break
    @case(123)
    Igual 2
    @break
    @default
    Default
@endswitch



@endsection

@push('styles')
<style>
    .last{
        background: #cccccc
    }
</style>

@endpush

@push('scripts')
    <script>
        document.body.style.background = '#cccccc'
    </script>
@endpush
