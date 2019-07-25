
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="welcome">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
         <a id="navbarDropdown" class="nav-link active" href="/openAcc" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="send_money">Transfer Money</a>
          <a class="dropdown-item active" href="/transactions">Transactions</a>
          <a class="dropdown-item" href="/balance">Balance</a>
          <a class="dropdown-item" href="/feedback">Feedback</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/editprofile">Edit Profile</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
@extends('layouts.app')

@section('content')



<br>
<div class="container">
  @if($data)
<table class="table table-striped table-dark">
  <thead>
    <tr>
       <th scope="col">id</th>
      <th scope="col">Sender Account</th>
      <th scope="col">From Account</th>
      <th scope="col">Amount</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $info)
    <tr>
      <td>{{ $info->tid}}</td>
      <td>{{ $info->to_acc }}</td>
      <td>{{ $info->from_acc  }}</td>
      <td>{{ $info->amount  }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
</div>
@endsection
