<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    public function index()
    {
        return view('login1');
    }

    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required | email',
            'password' => 'required | alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'email' => $request->get('password'),
        );

        if (Auth::attempt($user_data)) {
            return redirect('main/successLogin');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }
    public function successLogin()
    {
        return view('successLogin');
    }
}