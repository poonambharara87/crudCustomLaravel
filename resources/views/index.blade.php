<!DOCTYPE html>
<html>
<body>

<h2>Data</h2>

<a href="{{route('create-data')}}">Create</a>
<table id="customers">
  <tr>
    <th>Company ID</th>
    <th>Contact</th>
    <th>Country</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

    @foreach($companies as $comp)
   
        <tr>
          
            <td>{{ $comp->name }}</td>
            <td>{{ $comp->email }}</td>
            <td>{{ $comp->address }}</td>
            <td><a href="{{ route('edit' , $comp->id) }}">Edit</a></td>
            <td><a href="{{ route('delete' , $comp->id) }}">Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>

