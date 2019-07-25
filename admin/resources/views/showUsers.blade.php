
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>

  <style type="text/css">
    #wax{
      width: 4rem;
      height:5rem;
    }
  </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <title>Account</title>
<body>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Account_no</th>
      <th scope="col">Balance</th>
      <th scope="col">Profile Picture</th>
      <th scope="col">Enable</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $info)
  <tr>

<td >{{$info->id}}</td>
<td >{{$info->name}}</td>
<td >{{$info->email}}</td>
<td >{{$info->mobile}}</td>
<td >{{$info->address}}</td>
<td >{{$info->account_no}}</td>
<td >{{$info->balance}}</td>
<td ><img src="http://localhost/Ebanking/user/storage/app/{{$info->cover_image}}" id="wax"></td>
<td >@if($info->balance==0)
  <a href="activate/{{$info->id}}"><button class="btn btn-danger">Activate</button></a>
    
    @else
    <a href="deactivate/{{$info->id}}"><button class="btn btn-success">Activated</button></a>
@endif
</td>
</tr>
    @endforeach
  </tbody>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">

</script>
</html>

@endsection