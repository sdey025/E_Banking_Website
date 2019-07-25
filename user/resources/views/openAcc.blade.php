<!DOCTYPE html>
<html>
<head>
	<style>
		.rounded-circle{
			margin-top: 5px;
		}
		.ria{
				margin-left: 25px;
        margin-top: 20px;
			}
		.row{

		}
		.jumbotron{
			display: table-cell ;
			float: left;
		}
    #riya{
      margin-left: 50px;
    }
    #ria777{
      width:18rem;
      height:22rem;
     
    }
    #puchh{
      width: 15rem;
      height: 18rem;
      margin-left: 650px;
      border-width: 12px;
      border-radius: 50%;
      margin-top: 20px;
    }
    #jian{
      background-color: #ce93d8;
    }
	</style>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Account</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		
		
</head>
<body class="bg-muted">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  

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
          <a class="dropdown-item" href="/send_money">Transfer Money</a>
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




  
    
  <br>
<div class="row col-12 " id="jian">

<ul class="ria">
  <h4 class="col-10 ml-4 list-group-item">Name: {{Auth::user()->name}}</h4>
  <h4 class="col-10 ml-4 list-group-item">Email: {{Auth::user()->email}}</h4>
  <h4 class="col-10 ml-4 list-group-item">Aadhar: {{Auth::user()->aadhar}}</h4>
  <h4 class="col-10 ml-4 list-group-item">Address: {{Auth::user()->address}}</h4>
  <h4 class="col-10 ml-4 list-group-item"> Account No: {{Auth::user()->account_no}} </h4>
  </ul>
  

<div id="ria777">
 <img id="puchh" src="http://localhost/Ebanking/user/storage/app/{{ Auth::user()->cover_image }}" class="border-dark">
</div>
</div>
<hr>

  <div class="col-12 ml-12">
    <div class="container"> 
<div class="row">
      <div class="jumbotron jumbotron-fluid " margin-left:50>

  <div class=""> 
    <img src="http://localhost/Ebanking/user/resources/views/img/puchu.gif">
    <br>
    <hr>
    <h1 class="display-4"><center>Planning to go Abroad</center></h1>
    <p class="lead"><center>View offers specially made for you for abroad tours</center></p>
  </div>
</div>
&nbsp &nbsp &nbsp

<div class="card" style="width: 18rem; height: 36rem; ">
  <img src="http://localhost/Ebanking/user/resources/views/img/riya78.png"  class="card-img-top" alt="">
  <div class="card-body">
    <a href="/www.irctc.com"><center>Various offers on rail tickets</center></a>
  </div>
  <div class="card display-blocked" style="width: 18rem; height: 22rem;">
  <img src="http://localhost/Ebanking/user/resources/views/img/riya77.jpg"  class="card-img-top" alt="" style="width: 17rem; height: 18rem;">
  <div class="card-body">
    <a href="/www.makemytrip.com"><center>50% off on flight tickets</center></a>
  </div>
</div>
</div>


</div>



  </div>
</div>
  
  <br><br><hr>
  <div ></div>



  <br>
  
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