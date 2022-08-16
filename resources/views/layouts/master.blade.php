
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
    @include('cookie-consent::index')
    <header>
  <!-- Intro settings -->
  <style>
  #footer
{
  width:100%;
  height:10%;   // the desired height
  position:absolute;
  bottom:10px;
  left:10px;
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
            <a class="nav-link" aria-current="page" style="font-size:30px;color:white" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""  style="font-size:50px;"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/offerwall"  style="font-size:30px;color:white;">Offerwall</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"  style="font-size:30px;color:white">Redeem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"  style="font-size:30px;color:white">Leaderboard</a>
          </li>
        </ul>
        @guest
    
        <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/register">Signup</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/login">login</a>
  </li>
  @else
  @if (Auth::user()->role == 'super' ||Auth::user()->role == 'admin')
  <li class="nav-item">
                      <a class="nav-link" href="/dashboard">Dashboard</a>
                               </li>  
                               @endif
  <li class="nav-item ">
               <a id="navbarDropdown" class="nav-link" href="" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                              </li>
                              <li>    <a class="nav-link" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form></li> 
                                                        
                             <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                               </li>
                               @endguest
                                      </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

 <main>
 @yield('content')
 </main>
<br><br><br>
<!-- botman-->

    <script>
        var botmanWidget = {
            aboutText: 'Write Something',
            introMessage: "✋ Hi! I'm form Real Programmer"
        };
    </script>
   
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

<!-- Footer -->

<footer id="" class="footer-top bg-dark text-center text-white">

  <!-- Grid container -->
  <div  class="container">
   
    


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
  <div  id="" class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);width:100%">
    © 2022 Copyright:
    <a class="text-white" href="">GamersOffers.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </body>

</html>


