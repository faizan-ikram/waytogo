<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $contact = ContactAdmin::join('users','contact_admins.user_id','=','users.id')->select('users.name as uname', 'contact_admins.*')
            ->get();
        return view('ContactAdmin.index', compact('contact'));

      //  $tour = Tour::all()->toArray();

       // return view('Tour.index', compact('tour'));
    }
    public function destroy($id)
    {
        $contact = ContactAdmin::find($id);
        $contact->delete();

        return redirect('/ContactAdmin');
    }
    public function add(Request $request)
    {
        $u_id = Auth::user()->id;

        $contact = new ContactAdmin([

            'user_id'=>$u_id,
            'name' => $request->get('name'),
            'subject' => $request->get('subject'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),

        ]);

        $contact->save();

        Session::flash('message', "Your Message Has been Sent");
        return Redirect::back();
    }

}
