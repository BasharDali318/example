@extends('layouts.master')

@section('content')
<!-- intro section-->
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
       @if (Auth::user())
          <a
            class="btn btn-outline-light btn-lg m-2"
            href="/offerwall"
            role="button"
            rel="nofollow"
            target="_blank"
          >Get Started</a>
          @endif
          @guest
          <a
            class="btn btn-outline-light btn-lg m-2"
            href="/register"
            target="_blank"
            role="button"
          >SignUp</a>
          @endguest
        </div>
      </div>
      </div>
    </div>
  
</section>
<!--HOW DOES IT WORK? SECTION -->
<section>
<div style="float: right;">
<img src="assets/img/gift2.png"  style="height: 600px;"/>
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
</section>




@endsection