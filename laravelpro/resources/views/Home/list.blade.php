<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User List</h1>
    <a href="/home">Home</a>|
    <a href="/logout">Logout</a>
    <br>
    <br>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>salary</td>
            <td>salary</td>
        </tr>
        @for($i=0;$i<count($userlist);$i++)
        @if ($userlist[$i]['id']!='')
        <tr>
            <td>{{ $userlist[$i]['id'] }}</td>
            <td>{{$userlist[$i]['name'] }}</td>
            <td>{{$userlist[$i]['salary'] }}</td>
            <td>
                <a href="/home/update/{{ $userlist[$i]['id'] }}">Edit</a>
                <a href="/home/delete/{{ $userlist[$i]['id'] }}">Delete</a>
            </td>
        </tr>            
        @endif
        @endfor
    </table>
</body>
</html>