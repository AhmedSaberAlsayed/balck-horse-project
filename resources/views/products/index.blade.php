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
            <th>#</th>
            <th>name</th>
            <th>desc</th>
            <th>price</th>
            <th>quantity</th>
            <th>category_id</th>
            <th>img</th>
            <th>cart</th>

        </tr>
        @foreach ($products as $product)
            <td>{{ $product->id }}</td>
            <td>{{ $product->Product_name }}</td>
            <td>{{ $product->discription }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->category_id }}</td>
            <td>
                <img width="200px" height="50px" src="{{asset($product->imgpath)}}" alt="imageeeeee">
            </td>
            <form action="{{ url('addcart',$product->id) }}" method="post">
                @csrf
                <td>
                    <input type="number" name="quantity" min="1" >
                </td>
                <td>
                    <input type="submit" value="Add to cart">
                </td>
            </form>
            @endforeach
            <tr> 

        </tr>
    </table>
</body>
</html>
