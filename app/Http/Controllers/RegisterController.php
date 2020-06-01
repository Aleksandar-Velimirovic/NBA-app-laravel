<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Mail;

use App\Http\Requests\RegisterRequest;

use App\Mail\VerificationMail;

class RegisterController extends Controller
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function __construct(){
      
        $this->middleware('guest');
    }

    public function create(){

        return view('register.create');
    }

    public function store(RegisterRequest $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
       
        auth()->login($user);

        Mail::to($request->email)->send(new VerificationMail($user));

        session()->flash('message', 'Thank you for your registration!');
        return redirect()->route('login.create');
    }
}
