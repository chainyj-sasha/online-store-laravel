@extends('layouts.main')

@section('title', $product->name)

@section('content')

    <div class="container">
        <div class="starter-template">
            <h1>{{ $product->name }}</h1>
            <p>Цена: <b>{{ $product->price }}</b></p>
            <img src="../notebook.jpg">
            <p>{{ $product->description }}</p>
            <p>В наличии {{ $product->quantity }} шт.</p>
            <a class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/1/add">Добавить в корзину</a>
        </div>
    </div>

@endsection
