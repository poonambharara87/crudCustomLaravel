<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('update', $companies->id)}}" method="post">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="fname" name="name" value="{{ $companies->name}}"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="{{$companies->email}}"><br><br>
  <label for="address">Last name:</label><br>
  <input type="text" id="address" name="address" value="{{$companies->address}}"><br><br>
  <button type="submit">Update</button>
  
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

