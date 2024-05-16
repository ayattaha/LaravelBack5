<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<h2>Edite Student</h2>

<form action="{{ route('updateStudents',[$student->id])}}" method="POST">
    @csrf
    @method('put')
  <label for="StudentName">Student name:</label><br>
  <input type="text"  name="StdudentName" value="{{ $student->StdudentName }}"><br>
  
  <label for="age">age:</label><br>
  <input type="integer"  name="age" value="{{ $student->age }}"><br>
  
<br>
 
  <input type="submit" value="Submit">
</form> 
</body>
</html>

