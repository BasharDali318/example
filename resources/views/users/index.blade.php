@extends('layouts.app')

@section('content')

<h1 id="mytext" class="container "style="position:center;" >USERS TABLE</h1>
<br>
<hr >


    </div><!--  <div class="card-body">-->
 
     </div>

  </div>
  <br>

<hr >

<br>
<div class=" container" style="color:white">
     <table class="table table-dark table-striped">
       <thead>
        <tr>
            <th class="uk-width-small">#</th>
            <th>name</th>
            <th>email</th>
            <th>role</th>
            <th>points</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->points}}</td>
            <td>{{$user->status}}</td>
            
            <td> <a href="{{url('/destroy-user/' . $user->id . '/by/'. Auth::user()->name.'/'.Auth::user()->id)}}"><button class="uk-button uk-button-default btn btn-danger" style="color:white;"type="button">delete</button></td>
            @if ($user->status=='1')
            <td> <a href="{{url('/ban/'. $user->id. '/by/'. Auth::user()->name.'/'.Auth::user()->id)}}"><button class="uk-button uk-button-default btn btn-danger" style="color:white;"type="button">ban</button></td>
            @elseif($user->status=='0')
            <td><a href="{{url('/active/' . $user->id . '/by/'. Auth::user()->name.'/'.Auth::user()->id)}}"><button class="uk-button uk-button-default"style="color:green;" type="button">active</button></td>
            @endif
            <td><a href="{{url('/edit-user/' . $user->id )}}"><button class="uk-button uk-button-default"style="color:green;" type="button">change role</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<div   class="container ">
  <a href="{{url('/dashboard')}}">
      <button class="btn btn-primary mt3" type="button" name="button" style="width:125px">back to panel</button>
  </a>
</div>
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
@endsection
