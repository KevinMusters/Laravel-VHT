<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>{{$product->name}}</h1>
    <p>{{$product->description}}</p>
    <p>{{$product->quantity}}</p>
    <p>{{$product->price}}</p>
</body>
</html>

{{-- Maak master-page van categories --}}