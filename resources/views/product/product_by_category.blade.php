@extends('layouts.main')

@section('title', 'Товары категории ' . $category)

@section('content')

    <div class="container">
        <div class="starter-template">

            <h1>Все товары</h1>

            <div class="row">

                @foreach($products as $product)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="notebook.jpg" alt="iPhone X 64GB">
                            <div class="caption">
                                <h3>{{ $product->name }}</h3>
                                <p>{{ $product->price }} руб.</p>
                                <p>
                                    <a href="http://laravel-diplom-1.rdavydov.ru/basket/1/add" class="btn btn-primary" role="button">В корзину</a>
                                    <a href="{{ route('show_one_product', ['id'=>$product->id]) }}" class="btn btn-default" role="button">Подробнее</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
