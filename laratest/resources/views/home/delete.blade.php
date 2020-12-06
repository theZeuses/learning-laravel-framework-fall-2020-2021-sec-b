<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
    <form method="post">
        @csrf
        <fieldset>
            <legend>Are you sure to delete?</legend>
        <table>
            <tr>
                <td><h2>ID</h2></td>
                <td>{{$student['id']}}</td>
            </tr>
            <tr>
                <td><h2>Name</h2></td>
                <td>{{$student['name']}} </td>
            </tr>
            <tr>
                <td><h2>CGPA</h2></td>
                <td>{{$student['cgpa']}} </td>
            </tr>
            <tr>
                <td><h2>Email</h2></td>
                <td>{{$student['email']}}</td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Confirm"></td>
            </tr>
        </table>
        </fieldset>
    </form>
</body>
</html>