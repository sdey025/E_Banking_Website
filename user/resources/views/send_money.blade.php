<!DOCTYPE html>
<html>
<head>
    <title>Send Money</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-dark">
	<header>
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
          <a class="dropdown-item active" href="/send_money">Transfer Money</a>
          <a class="dropdown-item" href="/transactions">Transactions</a>
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
</header>
@extends('layouts.app')

@section('content')




<br>
<br>
<br>
	<form action="/successtran" method='post' class="container" >

    @csrf
  <fieldset>
   <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right text-light"><strong>Enter Account Number</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('to_account') is-invalid @enderror" name="to_account" value="{{ old('to_account') }}" required autocomplete="to_account" autofocus>

                                @error('to_account')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
   <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right text-light"><strong>Enter The Name</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('to_name') is-invalid @enderror" name="to_name" value="{{ old('to_name') }}" required autocomplete="to_name" autofocus>

                                @error('to_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right text-light"><strong>Enter Amount</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
   
   
   <center> <button type="submit" class="btn btn-primary">Submit</button> </center>
  </fieldset>
</form>




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
     
@endsection
