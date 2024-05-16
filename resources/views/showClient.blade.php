<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <h2>{{$client->ClienName}}</h2>
  <table class="table table-hover">
    <thead>
    <tbody>
    <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Website</td>
    </tr>
    <tr>
    <td>{{$client->ClienName}}</td>
        <td>{{$client->phone}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->website}}</td>
        </tr>
 
    </tbody>
  </table>
  </body>
</html>
