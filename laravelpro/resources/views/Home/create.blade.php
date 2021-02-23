<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create User</h1>
	<form method="post">
		@csrf
			<table>
				<tr>
					<td>UserId</td>
					<td><input type="number" name="id" value="{{ old('id') }}"></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td><input type="text" name="username" value="{{ old('username') }}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{ old('email') }}"></td>
				</tr>
                <tr>
					<td>Password</td>
					<td><input type="text" name="password" value="{{ old('password') }}"></td>
				</tr>
                <tr>
					<td>Type</td>
					<td>
                        <select name="type">
                            <option value="admin" @if(old('type')=='admin') selected @endif>Admin</option>
                            <option value="user" @if(old('type')=='user') selected @endif>User</option>
                        </select>
                    </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
	</form>
    @foreach ($errors->all() as $item)
        {{ $item }}<br>
    @endforeach
</body>
</html>
