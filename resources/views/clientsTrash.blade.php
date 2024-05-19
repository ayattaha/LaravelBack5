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
@include('includes.nav')
<div class="container">
  <h2>Clients Trash</h2>
  <table class="table table-hover">
    <thead>
    <tbody>
      <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Website</td>
        <td>Restore</td>
        <td>Delete</td>
</tr>
@foreach($trash as $client)
      <tr>
        <td>{{$client->ClienName}}</td>
        <td>{{$client->phone}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->website}}</td>
        <td><a href="{{route('restorClient', $client->id)}}"> Restore </a></td>
        <td>
<form action="{{ route('ForceDeleteClient') }}" method="post">
@csrf
@method('DELETE')
<input type="hidden" name="id" value="{{ $client->id }}">
<input type="submit" value="delete">
</form>
</td>
      </tr>
     @endforeach 
    </tbody>
  </table>
</div>

</body>
</html>
