<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<a href="{{route('admin.home')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>


		<form method="post">

			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<fieldset>
				<legend>Create Employer</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Employer Name</td>
					<td><input type="text" name="employername" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyname" value="{{old('cgpa')}}"></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="contactno" value="{{old('dept')}}"></td>
				</tr>
				<tr>
					<td>type</td>
					<td><input type="text" name="type" value="{{old('type')}}"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
			</fieldset>
		</form>

		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>