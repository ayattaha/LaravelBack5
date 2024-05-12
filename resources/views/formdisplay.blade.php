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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clients</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('Add') }}">Add</a></li>
          <li><a href="{{ route('Clients') }}">Clients</a></li>
       
    </ul>
  </div>
</nav>
  
<h2>Add Clients</h2>

<div class="container">
<form action="{{ route('insertClient') }}" method="POST">
    @csrf
  <label for="ClienName">Client name:</label><br>
  <input type="text"  name="ClienName" value=""><br>
  
  <label for="phone">phone:</label><br>
  <input type="text"  name="phone" value=""><br>
  
  <label for="email">email:</label><br>
  <input type="email"  name="email" value=""><br>
  
  <label for="website">website:</label><br>
  <input type="text"  name="website" value=""><br><br>
 
  <input type="submit" value="Submit">
</form> 
</div>
</body>
</html>

