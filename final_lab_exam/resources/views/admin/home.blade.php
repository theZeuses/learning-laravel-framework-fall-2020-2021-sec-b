<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome home! {{$username}}</h1>
	<a href="{{ route('employer.add') }}">Register New Employer</a> |
	<a href="{{ route('employer.list') }}">View Employer List</a> |
	<a href="/logout">logout</a>
	<br>

</body>
</html>