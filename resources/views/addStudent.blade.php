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
@include('includes.navs')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Students</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('AddStusent') }}">Add Student</a></li>
          <li><a href="{{ route('Students') }}">Students</a></li>
       
    </ul>
  </div>
</nav>
<h2>Inser Student</h2>

<form action="{{ route('insertStudent') }}" method="POST">
    @csrf
  <label for="StudentName">Student name:</label><br>
  <input type="text"  name="StdudentName" value=""><br>
  
  <label for="age">age:</label><br>
  <input type="integer"  name="age" value=""><br>
  
<br>
 
  <input type="submit" value="Submit">
</form> 
</body>
</html>

