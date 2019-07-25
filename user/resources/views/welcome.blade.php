<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ebanking</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .center{
                width: 200px;
                height: 200px;
                text-align: center;
            }
            .center1{
                width: 300px;
                height: 220px;

            }
            .card-text:focus{
                color: green;
            }
            .card{
                border-color: black ;
                height: 360px;
                margin-left: 38px;
                
            }
            #ria0{
              height: 200px;
              width: 200px;
            }
            .nav{
              box-shadow: 10px 10px 10px 10px;
            }
            #ria9{
              height: 192px;
              
            }
            #riya6{
              font-weight: bold;
            }
        </style>
    </head>
    <body>


        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
  <a class="navbar-brand " href="#"> <i class="fa fa-university text-danger" aria-hidden="true">
                    <strong style="color: red">Indian Bank</strong>
                    </i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Customer's Area
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/openAcc">Open Account</a>
          <a class="dropdown-item" href="/send_money">Transfer Money</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="transactions">Transactions</a>
          <a class="dropdown-item" href="/balance">Account Balance</a>
          <a class="dropdown-item" href="/feedback">Feedback</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success" href="/editprofile" tabindex="-1" aria-disabled="true">Edit Account</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<br>

            

<div class="container ">
            <div class="row">
  <div class="col-sm-6 text-center">
    <div class="card text-center bg-dark border-warning mb-3">
        <center>
        <img src="http://localhost/Ebanking/user/resources/views/img/riya1.jpg" class="center text-center margin-top">
        </center>
      <div class="card-body">

        <h5 class="card-title text-light">Instant Atm for 24 hours</h5>
        <p class="card-text text-success">We are supporting a 24 hrs service of ATM machine all over the country</p>
        <a href="#" class="btn btn-primary">Know More?</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 text-center">
    <div class="card text-center bg-dark border-success mb-3">
        <center>
            <img src="http://localhost/Ebanking/user/resources/views/img/riya2.jpg" class="center1 margin-top">
        </center>
      <div class="card-body" id="MobileB">
        <h5 class="card-title text-light">Mobile Banking</h5>
        <p class="card-text text-danger">Download our app to get intenet banking instant</p>
        <a href="#" class="btn btn-success">Download</a>
      </div>
    </div>
  </div>
</div>
</div>
<br><br>
<hr>

<div class="container">
  <h5>General <strong>Intrests</strong></h1>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/Ebanking/user/resources/views/img/riya8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/Ebanking/user/resources/views/img/riya9.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/Ebanking/user/resources/views/img/riya10.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

 
<br><br><hr>

<div class="container">
<div class="row">

<div class="card border-light" style="width: 13rem"  id="ria0">
  <div class="card-body">
    <i class="fa fa-book" style="font-size: 155px" aria-hidden="true"></i>
    <br>
    <a href="/balance" class="card-link text-dark" id="riya6"><center>Savings Account</center></a>
  </div>
</div>
&nbsp &nbsp &nbsp &nbsp

<div class="card border-light" style="width: 13rem"  id="ria0">
  <div class="card-body">
    <i class="fa fa-credit-card" style="font-size: 155px" aria-hidden="true"></i>
    <br>
    <a href="" class="card-link text-dark" id="riya6"><center>Debit Card</center></a>
  </div>
</div>
&nbsp &nbsp &nbsp &nbsp

<div class="card border-light" style="width: 13rem"  id="ria0">
  <div class="card-body">
    <i class="fa fa-money" style="font-size: 155px" aria-hidden="true"></i>
    <br>
    <a href="/editprofile" class="card-link text-dark" id="riya6"><center>Fixed Deposit</center></a>
  </div>
</div>
&nbsp &nbsp &nbsp &nbsp

<div class="card border-light" style="width: 13rem"  id="ria0">
  <div class="card-body">
    <i class="fa fa-home" style="font-size: 155px" aria-hidden="true"></i>
    <br>
    <a href="/editprofile" class="card-link text-dark" id="riya6"><center>Home Loans</center></a>
  </div>
</div>

</div>
</div>


<br><br><hr>

<div class="container">
  <div class="row">
<div class="card" id="ria9" style="width: 20rem;">
  <img src="http://localhost/Ebanking/user/resources/views/img/riya11.jpeg" class="card-img-top" style="height: 190px" alt="">
  <p class="text-dark"><center>Get 20% off on online payment</center></p>
  
</div>
<div class="card" id="ria9" style="width: 20rem;">
  <img src="http://localhost/Ebanking/user/resources/views/img/riya88.jpg" class="card-img-top" style="height: 190px" alt="">
  <p class="text-dark"><center>Get 20% off on kfc in INB card payment</center></p>
  
</div>
<div class="card" id="ria9" style="width: 20rem;">
  <img src="http://localhost/Ebanking/user/resources/views/img/riya89.jpg" class="card-img-top" style="height: 190px" alt="">
  <p class="text-dark"><center>Get 20% off on online Hotel booking</center></p>
  
</div>
</div>
</div>







<br><br><hr>

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
        <p>Call: 180-419-5959 to get your Account Balance</p>
        <p>Call: 180-419-6969 to get your Mini Statement</p>
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
              <a href="#MobileB">Mobile Banking</a>
            </p>
          </li>
          <li>
            <p>
              <a href="http://localhost/Ebanking/user/resources/views/kyc-booklet.pdf">KYC information</a>
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
    <a href="/welcome"> www.indianbank.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

