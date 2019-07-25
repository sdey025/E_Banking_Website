<!DOCTYPE html>
<html>
<head>

	<title>Banking Profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style type="text/css">
	#defaultCheck1{
		margin-left: 40px;
		margin-bottom:7px;

	}
	#check{
		margin-left: 60px;
		margin-bottom: 5px;
	}
	#div1{
		margin-left: 200px;
	}
</style>

<body class="bg-secondary">
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="welcome">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
         <a id="navbarDropdown" class="nav-link " href="/openAcc" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre active>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/send_money">Transfer Money</a>
          <a class="dropdown-item" href="/transactions">Transactions</a>
          <a class="dropdown-item" href="/balance">Account Balance</a>
          <a class="dropdown-item" href="/feedback">Feedback</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="/editprofile">Edit Profile</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<br>


<div class="alert alert-primary container" role="alert">
  All Fields Are Mandatory !!!
</div>
<br>
<br>

<div class="container" id="div1">

<h3> Hi, The Account Number You are bearing is {{ Auth::user()->account_no }} !!!</h3>
</div>
<br>
<br>



<form>
	<div class="container">
		<div class="row">
  <div class="form-group col-md-6">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="{{Auth::user()->email}}" disabled="true">
  </div>
 <div class="col">
 <div class="form-check">
 	<div>
 		<h4>Select Account Type:</h4>
 	</div>
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onfocus="click()">
  <label class="form-check-label" for="defaultCheck1" id="check" >
    Savings Account
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" disabled="false" value="" id="defaultCheck1">
  <label class="form-check-label"  for="defaultCheck1" id="check">
    Current Account
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" disabled="false" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1" id="check">
    Fixed Deposit
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" disabled="false" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1" id="check">
    Retirement Account
  </label>
</div>
</div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Select Account Type You need To Activate</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option onclick="a()">Current Account</option>
      <option onclick="a()">Fixed Deposit</option>
      <option onclick="abcd()">Retirement Account</option>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Drop a Application to the Manager</label>
    <textarea class="form-control" disabled id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="row">
  	  <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Enter Branch</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="KOLKATA" disabled>
  </div>
  <div class="form-group col-md-6">
    <label for="formGroupExampleInput2">Enter IFSC Code</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="INBN023145" disabled>
  </div>
  </div>
  
</form>
</div>


<div class="container">
	<center>
	<button type="submit" class="btn btn-lg btn-primary" onclick="ria()" id="riya">Submit</button>
	</center>
</div>
<br>

<br><br>
<hr>

<div class="container">
  <h4>Edit Personal Details:</h4>
  <br>

<br>
<p>(note: If you need to change the name please go to our branch nearby you.)</p>
<p>(note: Applying a checkbook, ATM card and changing nominee will be done in the bank because these tasks need the presence of you in the bank)</p>
</div>
<br><br>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
	function abcd(){
		document.getElementById('exampleFormControlTextarea1').removeAttribute('disabled');
	
	}
	function click(){
		document.getElementById('check').getAttribute('disabled','true');
	}
	function a(){
		document.getElementById('exampleFormControlTextarea1').getAttribute('disabled=enabled');

	}
  function ria(){
          document.getElementById('riya'); window.location.href="/welcome";
  }


  
</script>
</html>