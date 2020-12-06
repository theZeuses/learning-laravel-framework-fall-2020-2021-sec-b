<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post">
	@csrf
		<fieldset>
			<legend>Edit Student</legend>
		<table>
            <tr>
				<td>ID</td>
				<td><input type="text" name="name" value="{{$student['id']}}" disabled></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$student['name']}}"></td>
			</tr>
			<tr>
				<td>CGPA</td>
				<td><input type="text" name="cgpa" value="{{$student['cgpa']}}"></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{$student['email']}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>