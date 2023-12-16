@extends('layouts.main')

@section('title', 'Все категории')

@section('content')

    <div class="container">
        <div class="starter-template">
            @foreach($categories as $category)
                <div class="panel">
                    <a href="{{ route('products_by_category', ['categoryId'=>$category->id]) }}">
                        <img src="iphone.jpg">
                        <h2>{{ $category->name }}</h2>
                    </a>
                    <p>
                        Описание категории товаров
                    </p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
