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
  
<h2>Edite  Clients</h2>

<div class="container">
<form action="{{ route('updateClients',[$client->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
  <label for="ClienName">Client name:</label><br>
  <input type="text"  name="ClienName" value="{{ $client->ClienName }}"class="form-control"><br>
  <p style="color: red;"> 
@error('ClienName')
{{ $message }}
@enderror</p>

  <label for="phone">phone:</label><br>
  <input type="text"  name="phone" value="{{ $client->phone }}"class="form-control"><br>
  <p style="color: red;"> 
@error('phone')
{{ $message }}
@enderror</p>

  <label for="email">email:</label><br>
  <input type="email"  name="email" value="{{ $client->email }}"class="form-control"><br>
  <p style="color: red;"> 
@error('email')
{{ $message }}
@enderror</p>

  <label for="website">website:</label><br>
  <input type="text"  name="website" value="{{ $client->website }}"class="form-control"><br><br>
  <label for="city">City:</label><br>
  <p style="color: red;"> 
@error('website')
{{ $message }}
@enderror</p>

<select name="city" id="city"  class="form-control">
  <option value="">Please Select City</option>
  <option value="Cairo" {{ $client->city  == 'Cairo' ? 'selected' : '' }}>Cairo</option>
  <option value="Giza"{{ $client->city == 'Giza' ? 'selected' : '' }}>Giza</option>
  <option value="Alex"{{ $client->city == 'Alex' ? 'selected' : '' }}>Alex</option>
</select>
<br><br>
<p style="color: red;"> @error('city')
{{ $message }}
@enderror</p>

<label for="active">Active:</label><br>
 <input type="checkbox" id="active" name="active" class="form-control" {{ $client->active ? 'checked' : '' }} ><br><br>
 <p style="color: red;"> 
@error('active')
{{ $message }}
@enderror</p>

<label for="image">Image:</label><br>
@if($client->image)
  <img src="{{asset('assets/images/'.$client->image)}}" width="300" height="200" alt="">
@endif
<input type="file" id="image" name="image" class="form-control" enctype="multipart/form-data"><br><br>
<p style="color: red;"> 
@error('image')
{{ $message }}
@enderror</p>
  <input type="submit" value="Submit">
</form> 
</div>
</body>
</html>

