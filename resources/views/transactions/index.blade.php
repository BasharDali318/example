@extends('layouts.app')

@section('content')

<h1 id="mytext" class="container "style="position:center;" >TRANSACTIONS TABLE</h1>
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
            <th>action</th>
            <th>action_by</th>
            <th>action_on</th>
            <th>at</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transactions as $transaction)
        <tr>
            <td>{{$transaction->action_id}}</td>
            <td>{{$transaction->action_name}}</td>
            <td>{{$transaction->action_by}}</td>
            <td>{{$transaction->action_on}}</td>
            <td>{{$transaction->created_at}}</td>
            
        
    
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
