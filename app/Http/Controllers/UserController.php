<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $users = User::all();
      return view('users.index' , compact('users'));
    }
     /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function store(Request $request)
  {
      //
      $user= new User();

      
          $user->name = request("name");
          $user->email = request("email");
          $user->password =Hash::make(request("password")) ;
         
          $user->role = request("role");
      
      $user->save();
      return redirect()->route('users');
  }
 /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\Response
   */
 public function edit($id)
 {
     //
     $user =User::where('id',"=", $id)->first();
     return view('users.edit' , compact('user'));
 }
 /**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\User  $user
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    //
    $user =User::where('id',"=", $id)->first();
    if ($user->role=='super'){
  return  redirect()->route('users');}
      else{
    $user->role = request("role");
    $user->save();
  return redirect()->route('users');
      }
    



}

/**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\User  $dep
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
      $user =User::where('id',"=", $id)->first();
      if ($user->role=='super'){
          return  redirect()->route('users');
      }
      else{
          User::where("id", $user->id)->delete();
          
          return  redirect()->route('users');
      }
      
  }
}
