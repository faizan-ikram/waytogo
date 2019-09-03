<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CompanyLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:company');
    }


    public function showLoginForm()
    {
        return view('auth.company-login');
    }

    public function Login( Request $request)
    {
        // Validate the login data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //Attempt to log the user in

        if(Auth::guard('company')->attempt(['email'=> $request->email,'password'=>$request->password],$request->remember))
        {

            return redirect()->intended(route('company.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
