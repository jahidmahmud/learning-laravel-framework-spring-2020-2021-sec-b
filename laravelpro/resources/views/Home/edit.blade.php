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
	<form method="post">
			<table>
				<tr>
					<td>Id</td>
					<td><input type="text" name="id" value="{{ $user['id'] }}"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="{{ $user['name'] }}"></td>
				</tr>
                <tr>
					<td>Salary</td>
					<td><input type="text" name="salary" value="{{ $user['salary'] }}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
	</form>
</body>
</html>