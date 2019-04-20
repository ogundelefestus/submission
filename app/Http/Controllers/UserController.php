<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getsignup(){
        return view('user.signup');
    }
    public function postsignup(Request $request){
$this->validate($request,[
    'fullname'=>'required',
    'email'=>'email|required|unique:users',
    'password'=>'required|min:4'

]);
$user=new User([

    'fullname'=>$request->input('fullname'),
    'email'=>$request->input('email'),
    'password'=>bcrypt($request->input('password'))

]);
$user->save();
return redirect()->route['user.profile'];

    }
   
}
