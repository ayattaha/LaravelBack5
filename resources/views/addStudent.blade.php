<!DOCTYPE html>
<html>
<body>

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

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

