<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    public function __construct(){
      
        $this->middleware('guest')->except('destroy');
    }
  
    public function create(){

        return view('login.create');
    }

    public function store(){

        if(!auth()->attempt(request(['email','password']))){
           
            return back()->withErrors(['message' => 'Try again!']);
        }else{

            if(!Auth()->user()->is_verified){

                return back()->withErrors(['message' => 'You are not verified!']);
            }else{

                return redirect()->route('teams.index');
            }
        }
    }

    public function verification($id){

        $user = User::find($id);

        $user->is_verified = true;

        return redirect()->route('teams.index');
    }

    public function destroy(){

        auth()->logout();

        return redirect()->route('teams.index');
    }
}
