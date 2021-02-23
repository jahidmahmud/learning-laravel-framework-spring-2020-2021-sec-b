<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit User</h1>
	<form method="post" action="{{ route('home.confirmedit',$user['id']) }}">
		@csrf
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id" value="{{ $user['id'] }}"></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td><input type="text" name="username" value="{{ $user['username'] }}"></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{ $user['email'] }}"></td>
				</tr>
                <tr>
					<td>Password</td>
					<td><input type="text" name="password" value="{{ $user['password'] }}"></td>
				</tr>
                <tr>
					<td>Type</td>
					<td>
                        <select name="type">
                            <option value="admin" @if($user['type']=='admin') selected @endif >Admin</option>
                            <option value="user" @if($user['type']=='user') selected @endif>User</option>
                        </select>
                    </td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
	</form>
</body>
</html>
