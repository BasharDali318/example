@extends('layouts.app')

@section('content')

<h1 class="container"style="position:center;">CHANGE USER ROLE</h1>
<br>
<hr >

<div class="container" style="position:center;">
    <br>
    
    <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <div class="d-flex justify-content-center"><h3><span class="badge bg-secondary">User</span></h3></div>
        <br>
     
  
      <form class="row g-2 needs-validation"action="{{url('/update-user/'.$user->id)}}"  method="post" enctype="multipart/form-data">
      @csrf
    <input type="hidden" name="userid" value="{{Auth::user()->id}}">
      <div class="col-md-6">
                <label for="name" class="form-label">{{$user->name}}</label>
                
                
      </div>
      <div class="col-md-6">
              <label for="email" class="form-label">{{$user->email}}</label>
             
             
         </div>
     <div class="col-md-6">
              <label for="role" class="form-label">role</label>
              <select class="form-control" name="role" id="validationCustom04" required >
                <option type ="text" value="{{'admin'}}">admin</option>
                <option type ="text" value="{{'auther'}}">auther</option>
                <option type ="text" value="{{'editer'}}">editer</option>
                              </select>
                              </div>


      <div class="col-12">
            <button type="submit" name="change" class="btn btn-outline-success">Save</button>
      </div><!-- <div class="col-12">-->

</form>


    </div><!--  <div class="card-body">-->
 
     </div>

  </div>
  <br>
<div class="container">
  <a href="{{url('/dashboard')}}">
      <button class="btn btn-primary mt3" type="button" name="button" style="width:125px">back to panel</button>
  </a>
</div>
<hr >

<br>

@endsection
