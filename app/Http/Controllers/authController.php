<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function loginsubmit(Request $request){
        $credentials = $request->only(['username','password']);
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }else{
            return redirect()->back()->withErrors(['message'=>'Invalid username or password']);
        } 
    }
    public function logout(){
        Auth::logout();
        return redirect("login");
    }
    public function registersubmit(Request $request){
        $validate = $request->validate([
            'name'=>'required',
            'username'=>'required|unique:users|min:4|max:8',
            'password'=>'required|min:8|max:20'
        ]);
        $validate['password'] = Hash::make($validate['password']);

        $user = User::create($validate);

        if($user){
            return redirect('/login');
        }
    }
}
