<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Все товары</title>
</head>
<body>

@foreach($products as $product)

    <h3>{{ $product->name }}</h3>

    <ul>
        <li>Описание: {{ $product->description }}</li>
        <li>Колличество: {{ $product->quantity }}</li>
        <li>Цена: {{ $product->price }}</li>
        @if($product->active)
            <li>Активно</li>
        @else
            <li>НЕ активно</li>
        @endif

    </ul>

@endforeach

</body>
</html>
