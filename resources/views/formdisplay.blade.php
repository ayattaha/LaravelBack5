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
<form action="{{ route('insertClient') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <label for="ClienName">Client name:</label><br>
  <p color="red">@error('ClienName')
{{ $message }}
@enderror</p>
  <input type="text"  name="ClienName" value="{{ old('ClienName') }}"class="form-control"><br>
  
  <label for="phone">phone:</label><br>
  <p color="red">@error('phone')
{{ $message }}
@enderror</p>
  <input type="text"  name="phone" value="{{ old('phone') }}"class="form-control"><br>
  
  <label for="email">email:</label><br>
  <input type="email"  name="email" value="{{ old('email') }}"class="form-control"><br>
  <p color="red">@error('email')
{{ $message }}
@enderror</p>
  <label for="website">website:</label><br>
  <input type="text"  name="website" value="{{ old('website') }}" class="form-control"><br><br>
  <p color="red">@error('website')
{{ $message }}
@enderror</p>
<label for="city">City:</label><br>

    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza"{{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
      <option value="Alex"{{ old('city') == 'Alex' ? 'selected' : '' }}>Alex</option>
    </select>
    <br><br>
    <p color="red">@error('city')
{{ $message }}
@enderror</p>
    <label for="active">Active:</label><br>
     <input type="checkbox" id="active" name="active" class="form-control"value="1"{{ old('website') ? 'checked' : '' }}><br><br>
     <p color="red">@error('active')
{{ $message }}
@enderror</p>
<label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control" enctype="multipart/form-data"><br><br>
  <input type="submit" value="Submit">
</form> 
</div>
</body>
</html>

