<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
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
  public function destroy($id , $admin_name,$uid)
  {
      //
      $user =User::where('id',"=", $id)->first();
      if ($user->role=='super'){
        $transaction= new Transaction();
        $transaction->action = 'delete user';
        $transaction->action_by =$admin_name;
        $transaction->action_on = $user->name;
        $transaction->action_user =$uid;
        $transaction->save();
          return  redirect()->route('users');
      }
      else{
        $transaction= new Transaction();
        $transaction->action_name = 'delete user';
        $transaction->action_by = $admin_name;
        $transaction->action_on = $user->name;
        $transaction->action_user =$uid;
        $transaction->save();
        User::where("id", $user->id)->delete();
          
          return  redirect()->route('users');
      }
      
  }
  /**
 * ban the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\User  $user
 * @return \Illuminate\Http\Response
 */
public function ban($id, $admin_name,$uid)
{
    //
    $user =User::where('id',"=", $id)->first();
    if ($user->role=='super' ||$user->role=='admin'){
  return  redirect()->route('users');}
      else{
        $transaction= new Transaction();
        $transaction->action_name = 'ban user';
        $transaction->action_by = $admin_name;
        $transaction->action_on = $user->name;
        $transaction->action_user =$uid;
        $transaction->save();
    $user->status = '0';
    $user->save();
  return redirect()->route('users');
      }
    



}
 /**
 * active the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\User  $user
 * @return \Illuminate\Http\Response
 */
public function active($id , $admin_name,$uid)
{
    //
    $user =User::where('id',"=", $id)->first();
    if ($user->role=='super' ||$user->role=='admin'){
  return  redirect()->route('users');}
      else{
        $transaction= new Transaction();
        $transaction->action_name = 'active user';
        $transaction->action_by = $admin_name;
        $transaction->action_on = $user->name;
        $transaction->action_user =$uid;
        $transaction->save();
    $user->status = '1';
    $user->save();
  return redirect()->route('users');
      }
    



}
}
