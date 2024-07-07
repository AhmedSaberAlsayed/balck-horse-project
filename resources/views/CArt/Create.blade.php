<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>product title</th>
            <th>quantity</th>
            <th>product img </th>
            <th></th>
        </tr>
        <?php $totalpricee=0; ?>
        @foreach ($cart as $cart)
            <tr>
                <td>{{ $cart->product->Product_name }}</td>
                <td> {{ $cart->quantity}} </td>
                <td> {{ $cart->total_price}} </td>
            </tr>
            <?php $totalpricee= $totalpricee + $cart->total_price ?>
        @endforeach

        <h1>Total price: {{ $totalpricee }} </h1>
    </table>
    <a href="{{ route('cash') }}"> cash</a>
</body>
</html>