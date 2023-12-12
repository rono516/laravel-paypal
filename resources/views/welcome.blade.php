<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal with Laravel</title>
</head>

<body>

    <h2>Product: Laptop</h2>
    <h2>Price: $5 </h2>

    <form method="POST" action="{{ route('paypal') }}">
        @csrf
        <input type="hidden" name="price" value="5">
        <input type="hidden" name="product_name" value="laptop">
        <input type="hidden" name="quantity" value="1">
        <button type="hidden">Pay with Paypal</button>

    </form>
</body>

</html>
