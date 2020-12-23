<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Are you sure to delete {{ $name}}? 
	<form method="post" accept-charset="utf-8">
		@csrf
		<input type="submit" name="submit" value="Delete">
	</form>
	<a href="{{route('employer.list')}}">Back</a>
</body>
</html>