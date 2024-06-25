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
  <h2>{{__('messages.client_data')}}</h2>
  <table class="table table-hover">
    <thead>
    <tbody>
      <tr>
        <td>{{__('messages.client_name')}}</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Website</td>
        <td>city</td>
        <td>active</td>
        <td>image</td>
        <td>Edite</td>
        <td>Show</td>
        <td>Delete</td>
</tr>
@foreach($clients as $client)
      <tr>
        <td>{{$client->ClienName}}</td>
        <td>{{$client->phone}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->website}}</td>
        <td>{{$client->city}}</td>
        <td>{{$client->active ?'yes':'No'}}</td>
        <td>{{$client->image}}</td>
        <td><a href="{{route('editClients', $client->id)}}"> Edite </a></td>
        <td><a href="showClient/{{ $client->id }}">Show</a></td>
        <td>
<form action="{{ route('deleteClient') }}" method="post">
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
