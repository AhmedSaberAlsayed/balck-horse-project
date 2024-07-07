<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('store.product') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="Product_name" placeholder="enter your....">
    <input type="text" name="description" placeholder="enter your....">
    <input type="text" name="quantity" placeholder="enter your....">
    <input type="text" name="price" placeholder="enter your....">
    <input type="text" name="category_id" placeholder="enter your....">
    <input type="file" name="imgpath" placeholder="enter your....">
    <input type="submit" value="ADD Product">
</form>
</body>
</html>
