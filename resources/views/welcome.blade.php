<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/bootstrap.min.css')}}"  rel="stylesheet" >
        <link href="{{asset('css/style.css')}}"  rel="stylesheet" >
        <link rel="icon" href="">
        <script src="{{asset('js/bootstrap.mis.js')}}">
          
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

     
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Rewared</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      
    </head>

    
    <body  style="background-color:rgb(10, 10, 10);" >
    <header>
  <!-- Intro settings -->
  <style>
  #footer
{
  width:100%;
  height:20%;   // the desired height
  position:absolute;
  bottom:0;
  left:0;
}
#mytext
{
     // the desired height
 color:orange;
 font-size:25px;
}
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }

  </style>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg "  >
    <div class="container-fluid" style="background-color:rgb(15, 22, 10);height:100px;">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" style="font-size:30px;color:white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"  style="font-size:50px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"  style="font-size:30px;color:white;">Offerwall</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"  style="font-size:30px;color:white">Redeem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"  style="font-size:30px;color:white">Leaderboard</a>
          </li>
        </ul>
        <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Signup</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">@copyrigts</a>
  </li>
</ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <section>
  <div
    id="intro-example"
    class="p-5 text-center bg-image" style="background-image: url('assets/img/gift.jpg');background-repeat: no-repeat; background-attachment: fixed;
  background-size: cover;">
    <div class="mask"  >
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">EARN MONEY EVERY TIME YOU GO ONLINE!</h1>
          <h5 class="mb-4">
          Earn points for simple tasks such as completing 
          <i> Offerwalls</i>,<i> Surveys</i>
       , playing games, watching videos and more. </h5>
          <a
            class="btn btn-outline-light btn-lg m-2"
            href=""
            role="button"
            rel="nofollow"
            target="_blank"
          >Get Started</a
          >
          
          <a
            class="btn btn-outline-light btn-lg m-2"
            href=""
            target="_blank"
            role="button"
          >SignUp</a
          >
        </div>
      </div>
    </div>
  
  </div>
 
  </section>
</header>
 <div style="float: right;">
<img src="assets/img/gift5.png"  style="height: 600px;"/>
</div> 
<div   id="intro-example" class="card p-5 text-right"  style="background-color:rgb(15, 15, 15);">
  <div class="card-body">
  <div   class="mask">
  <div class=" text-white">
    <h1 class=" mb-3">HOW DOES IT WORK?</h1>
    <br><br>
  
    <div class="card-small" Styles="border:2px white">
  <h5  style="color:orange;font-size:30px;">Do Task</h5>
  <div class="card-body">
    <h5 class="card-title">Fill in surveys.Watch videos,<br>Play games and more</h5>
  </div>
  
</div>

<div class="card-small" Styles="border:2px white">
  <h5  style="color:orange;font-size:30px;">Earn Points</h5>
  <div class="card-body">
    <h5 class="card-title">Get rewardes for your time</h5>
  </div>
</div>

<div class="card-small" Styles="border:2px white">
  <h5  style="color:orange;font-size:30px;">Get Paid</h5>
  <div class="card-body">
    <h5 class="card-title">Redeem your points for cash,<br> Crypto currencies or gift cards</h5>
  </div>
</div>
  
    </div>
  </div>
  </div>
  <div>
 
 
</div>

<br><br><br>

<!-- Footer --

<footer id="intro-example" class="footer-top bg-dark text-center text-white">

  <!-- Grid container -->
  <div  class="container">
   
    

<hr>
<hr>
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 id="mytext" class="text-uppercase" style="color:orange;">earn</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Offer Page</a>
            </li>
            <li>
              <a href="#!" class="text-white">Refer a Friend</a>
            </li>
           
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase" style="color:orange;">explore</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Redeem</a>
            </li>
            <li>
              <a href="#!" class="text-white">F.A.Qs</a>
            </li>
           
            <li>
              <a href="#!" class="text-white">Telegram</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase" style="color:orange;">more</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Login</a>
            </li>
            <li>
              <a href="#!" class="text-white">Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-white">Terms and Conditions</a>
            </li>
           
          </ul>
        </div>
      
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <hr>
  <div  id="intro-example" class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);width:100%">
    © 2022 Copyright:
    <a class="text-white" href="">Rewared.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </body>
</html>
