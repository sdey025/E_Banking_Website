@extends('layouts.app')
@if($flag==0)
@section('content')
<h1>Your account will be verified in 48 hours</h1>
@endsection
@else
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="welcome">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
         <a id="navbarDropdown" class="nav-link active" href="/open" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="send_money">Transfer Money</a>
          <a class="dropdown-item" href="#">Transactions</a>
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




  
    
  <br>
<div class="rows">
<ul class="ria">
  <h4 class="col-4 ml-4 list-group-item">Name: {{Auth::user()->name}}</h4>
  <h4 class="col-4 ml-4 list-group-item">Email: {{Auth::user()->email}}</h4>
  <h4 class="col-4 ml-4 list-group-item">Aadhar: {{Auth::user()->aadhar}}</h4>
  <h4 class="col-4 ml-4 list-group-item">Address: {{Auth::user()->address}}</h4>
  <h4 class="col-4 ml-4 list-group-item"> Account No: {{Auth::user()->account_no}} </h4>
  </ul>
  <br>


  <div class="col-12 ml-12">
    <div class="container">
      <div class="jumbotron jumbotron-fluid " margin-left:50>
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>


  </div></div>
  </div> 
@endsection
@endif
