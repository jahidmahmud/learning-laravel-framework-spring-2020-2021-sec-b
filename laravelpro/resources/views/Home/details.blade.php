<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>User Details</h1>
    <a href="{{route('home.list')}}"> Back</a>
			<table>
				<tr>
					<td colspan="2">
						<img src="{{asset('/upload')}}/{{$user['image']}}" width="100px" height="100px"> </td>
				</tr>
				<tr>
					<td>Name: </td>
					<td>{{$user['username']}}</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>{{ $user['email']}}</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>{{ $user['password']}}</td>
				</tr>
                <tr>
					<td>Type</td>
					<td>{{ $user['type'] }}</td>
				</tr>
			</table>
</body>
</html>
