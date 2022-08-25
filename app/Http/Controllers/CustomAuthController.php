<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class CustomAuthController extends Controller
{
    public function login(){
        return view("pages.login");
    }

    public function registration(){
        return view("pages.register");
    }

    public function registerUser(Request $request){
       $request->validate([
            'name'=>'required|string',
            'email'=>'bail|required|email|unique:users',
            'password'=>'bail|required|max:12|min:4'
        ]);

        $user=new User();
        $user['name']=$request->name;
        $user['email']=$request->email;
        $user['password']=Hash::make($request->password);

        $res=$user->save();

        if($res){
            return back()->with('success','Registrated Successfully');
        }
        else{
            return back()->with('fail','Something went wrong, try again!');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'bail|required|email',
            'password'=>'bail|required|max:12|min:4'
        ]);

        $user=User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
            return back()->with('fail','Incorrect password');
            }
        }
        else{
            return back()->with('fail','This email doesn\'t exist');
        }
    }

    public function dashboard(){
        $data=array();
        if(session()->has('loginId')){
            $data=User::where('id','=', session()->get('loginId'))->first();
        }
        return view('layouts.dashboard', compact('data'));
    }

    public function logout(){
        if(session()->has('loginId')){
            session()->pull('loginId');
        }
        return redirect('login');
    }
}
