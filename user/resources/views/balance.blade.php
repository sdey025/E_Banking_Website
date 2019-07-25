    <head>

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <style type="text/css">
        .card-img-top{
            height: 220px;
        }
        #role{
            background-color: #E3E2E2;
        }
    </style>
</head>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  

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
          <a class="dropdown-item" href="/send_money">Transfer Money</a>
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



@extends('layouts.app')

@section('content')
 <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">



<div class="alert alert-dark container" role="alert" id="bal">
  <h4 class="alert-heading">Balance: ₹ {{ Auth::user()->balance }}</h4>
  <p>Aww yeah, its looking good your balance is ₹ {{ Auth::user()->balance }} , Thank You for being with us!! We are so lucky to get you as a customer.</p>
  <hr>
  <p class="mb-0">Note: You need to keep minimum ₹ 5000 to avoid extra fees.</p>
</div >
<br>
<br><div id="role">
<hr>

<div class="container" >
    <h4 class="text-primary">Schemes You May Like !!!</h4>



<div >
<div class="container" > 
    
<div class="row">
<div class="card" style="width: 22rem;">
  <img src="http://localhost/Ebanking/user/resources/views/img/riya3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text text-center">Manage your balance</p>
  </div>
  <button type="button" class="btn btn-outline-primary container ">Know More</button>
</div>
&nbsp &nbsp &nbsp &nbsp
<div class="card" style="width: 22rem;">
  <img src="http://localhost/Ebanking/user/resources/views/img/riya5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text text-center">Save money by logging in into Piggy Bank</p>
  </div>
  <button type="button" class="btn btn-outline-primary container">Go to our piggy bank</button>
</div>
&nbsp &nbsp &nbsp &nbsp
<div class="card" style="width: 22rem;">
  <img src="http://localhost/Ebanking/user/resources/views/img/riya6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text text-center">Get upto 40% of upto ₹200 order</p>
  </div>
  <button type="button" class="btn btn-outline-primary container ">Know More</button>
</div>

</div>
</div>
</div>


<br><br><hr></div></div>




<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Contact</h5>
        <p>Call: 1800-419-5959 to get your Account Balance</p>
        <p>Call: 1800-419-6969 to get your Mini Statement</p>
        <p>Find your Nearest Branch</p>
        <a href="/feedback" class="text-dark">Complaints and Grievance Redressal</a>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fa fa-home mr-3"></i>Bara Road, Giridih 815301, Jharkhand</p>
          </li>
          <li>
            <p>
              <i class="fa fa-envelope mr-3"></i> contactinfo@indianbank.com</p>
          </li>
          <li>
            <p>
              <i class="fa fa-phone mr-3"></i> +91 799 243 6530</p>
          </li>
          <li>
            <p>
              <i class="fa fa-print mr-3"></i> +91 787 290 8234</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

        <!-- Facebook -->
        <a>
          <i class="fa fa-facebook-square text-primary" style="font-size: 35px" aria-hidden="true" ></i>
        </a>
        <!-- Twitter -->
        <a>
          <i class="fa fa-twitter-square text-primary" style="font-size: 35px" aria-hidden="true"></i>
        </a>
        <!-- Google +-->
        <a>
          <i class="fa fa-google-plus-square text-danger" style="font-size: 35px" aria-hidden="true"></i>
        </a>
        <!-- Dribbble -->
        <a>
          <i class="fa fa-instagram text-danger" style="font-size: 35px" aria-hidden="true"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="/welcome"> indianbank.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
@endsection
