<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>welcome Home</h1>
    <a href="{{ route('home.create') }}">Create User</a>|
    <a href="{{ route('home.list') }}">View UserList</a>|
    <a href="/logout">LogOut</a>
</body>
</html>
