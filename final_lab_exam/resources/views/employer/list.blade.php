<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>
	<a href="{{route('admin.home')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Username</td>
			<td>Name</td>
			<td>Company</td>
			<td>Contact No</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($employers); $i++)

			<tr>
				<td>{{$employers[$i]['id']}}</td>
				<td>{{$employers[$i]['username']}}</td>
				<td>{{$employers[$i]['employername']}}</td>
				<td>{{$employers[$i]['companyname']}}</td>
				<td>{{$employers[$i]['contactno']}}</td>
				<td>
					<a href="{{route('employer.edit', $employers[$i]['id'])}}">Edit </a> |
					<a href="{{route('employer.list', $employers[$i]['id'])}}">Details </a> |
					<a href="{{route('employer.delete', $employers[$i]['id'])}}">Delete </a> 
				</td>
			</tr>

		@endfor


	</table>
</body>
</html>