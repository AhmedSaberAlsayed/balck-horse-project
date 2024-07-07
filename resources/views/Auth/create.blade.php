<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store_user') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter userName" >
        <input type="email" name="email" placeholder="Enter email" >
        <input type="text" name="Addresses" placeholder="Enter email" >
        <input type="number" name="phone" placeholder="Enter email" >
        <input type="password" name="password" placeholder="Enter password" >
        <input type="submit" value="Add user">
    </form>
</body>
</html>
