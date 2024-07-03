<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        //$password = Hash::make('Kitimba1*');
        //dd($password);
        return view('auth.login');
    }
    public function forgot(Request $request)
    {
        return view('auth.forgot');
    }
    public function login_post(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true))
        {
            if(Auth::user()->is_role == 1)
            {
                return redirect()->intended(url('admin/dashboard'));
            }
            else
            {
                return redirect()->back()->with('error', 'Sorry!, Wrong Credentials');

            }
        }
        else{
            return redirect()->back()->with('error', 'Sorry!, Wrong Credentials');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
    public function forgot_post()
    {
        $this->validate(request(), ['email' => 'required|email']);
        $count = User::where('email', request('email'))->count();
        if($count > 0)
        {
            $user = User::where('email', request('email'))->first();
            $user->remember_token  = Str::random(50);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', 'Reset Link sent to your email');
        }
        else
        {
            return redirect()->back()->with('error', 'Sorry!, Email not found');
        }
    }

}
