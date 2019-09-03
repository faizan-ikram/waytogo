<?php

namespace App\Http\Controllers;

use App\admin;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    public function index1()
    {

        return view('description');
    }
    public function edit(Request $request)
    {

        $admin=admin::find('2');

        $admin->description = $request->get('description');
        $admin->save();
        Session::flash('flash_message', 'Description Updated');
        return redirect('/description');
    }
    public function getLogout()
    {
        Auth::logout();

        return redirect('http://localhost:8000/');
    }
}