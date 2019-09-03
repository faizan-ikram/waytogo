<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
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
        $contact = Contact::where('company_id', $id)->join('users','contacts.user_id','=','users.id')->select('users.name as uname', 'contacts.*')
            ->get();
        return view('Contact.index', compact('contact'));

      //  $tour = Tour::all()->toArray();

       // return view('Tour.index', compact('tour'));
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/Contact');
    }
    public function add(Request $request, $id)
    {
        $u_id = Auth::user()->id;

        $contact = new Contact([
            'company_id' => $id,
            'user_id'=>$u_id,
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),

        ]);

        $contact->save();

        Session::flash('message', "Your Message Has been Sent");
        return Redirect::back();
    }

}
