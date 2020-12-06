<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <fieldset>
        <legend>Student Details</legend>
    <table>
        <tr>
            <td><h2>ID</h2></td>
            <td><h3>{{$student['id']}} </he></td>
        </tr>
        <tr>
            <td><h2>Name</h2></td>
            <td><h3>{{$student['name']}} </he></td>
        </tr>
        <tr>
            <td><h2>CGPA</h2></td>
            <td><h3>{{$student['cgpa']}} </he></td>
        </tr>
        <tr>
            <td><h2>Email</h2></td>
            <td><h3>{{$student['email']}} </he></td>
        </tr>
        <tr>
            <td><button><a href="/stdlist">Back</a></button></td>
        </tr>
    </table>
    </fieldset>
</body>
</html>