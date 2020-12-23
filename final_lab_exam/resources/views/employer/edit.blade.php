<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
</head>
<body>
	<a href="{{route('employer.list')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post" >

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Edit User</legend>
			<table border="1">
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{$username}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{$password}}"></td>
				</tr>
				<tr>
					<td>Employer Name</td>
					<td><input type="text" name="employername" value="{{$employername}}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyname" value="{{$companyname}}"></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="contactno" value="{{$contactno}}"></td>
				</tr>
				<tr>
					<td>type</td>
					<td><input type="text" name="type" value="{{$type}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
			</fieldset>
		</form>
		@foreach($errors->all() as $err)
			<div style="color: red">{{$err}} </div> <br>
		@endforeach
</body>
</html>