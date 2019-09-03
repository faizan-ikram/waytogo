<?php

namespace App\Http\Controllers;

use App\admin;
use App\company;
use App\Tour;
use App\User;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
class HomeController extends Controller
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
        $travels['data'] = DB::table('tours')->where('discount','>','0')->paginate(2); // you were missing the get method
        $tour1['data1']=Tour::all();
        if(count($travels) > 0)
        return view('home',$travels,$tour1);
        else
            return view('home');
    }
    public function offer()
    {
        $tour['data'] = DB::table('tours')->paginate(6);
        $tour1['data1']=Tour::all();
        if(count($tour) > 0)
            return view('offers',$tour,$tour1);
        else
            return view('offers');
    }
    public function offer2($tour_id)
    {
        $tour1['data1']=Tour::all();
        $tour['data']=Tour::where('id','=',$tour_id)->paginate(4);
        if(count($tour) > 0)
            return view('offers',$tour,$tour1);
        else
            return view('offers');
    }
    public function offer3($comp_id)
    {
        $tour=company::where('id','=',$comp_id)->first();
        $tour1=Tour::where('CompanyId','=',$comp_id)->paginate(2);
        
        $book = DB::table('bookings')->join('users', 'bookings.user_id', '=', 'users.id')->join('tours','bookings.tour_id','=','tours.id')->select('users.name as uname','tours.*','bookings.seats as seats')
            ->where('tours.CompanyId',$comp_id)
            ->get();
        $result = json_decode($book, true);
       
            return view('offers2',compact('tour','tour1'),compact('result'));


    }
     public function about()
    {
        $admin = admin::first();

        $result = json_decode($admin, true);
       
        $tour1['data1']=Tour::all();
        //dd($result);
        if(count($tour1) > 0)
            return view('about',compact('result'),$tour1);
        else
            return view('about');
    }
     public function gallery()
    { 
       
        $gallery['data']=DB::table('galleries')->paginate(3);
        $tour1['data1']=Tour::all();
        //dd($result);
        if(count($tour1) > 0)
            return view('gallery',$gallery,$tour1);
        else
            return view('gallery');
    }
    
     public function companies()
    {
        $travels['data'] = DB::table('companies')->paginate(3);
        $tour['data1']=Tour::all();
        if(count($tour) > 0)
            return view('companies',$tour,$travels);
        else
            return view('companies');
    }
     public function contact()
    {
        $tour['data'] = DB::table('tours')->get();
        $tour1['data1']=Tour::all();
        if(count($tour) > 0)
            return view('contact',$tour,$tour1);
        else
            return view('contact');
    }
    public function search(Request $request)
    {
        if($request->name==null)
            $request->name=0;
        if($request->departure==null)
            $request->departure=0-0-0;
        $var =  implode("-", array_reverse(explode("/", $request->departure)));
        $tour['data']=Tour::where('Budget','<=',$request->max_price)->where('Budget','>=',$request->min_price)->where('name',$request->name)->where('departure',$var)
            ->get();
        $tour1['data1']=Tour::all();


            return view('offers',$tour,$tour1);

    }
    public function search2(Request $request,$comp_id)
    {
        if($request->name==null)
            $request->name=0;
        if($request->departure==null)
            $request->departure=0-0-0;
        $var =  implode("-", array_reverse(explode("/", $request->departure)));
        $tour1['data1']=Tour::where('Budget','<=',$request->max_price)->where('Budget','>=',$request->min_price)->where('name',$request->name)->where('departure',$var)
            ->get();

        $tour['data']=company::where('id','=',$comp_id)->first();

        return view('offers2',$tour,$tour1);

    }

    public function dashboard()
    {

        $id = Auth::user()->id;
        $book = DB::table('bookings')->join('users', 'bookings.user_id', '=', 'users.id')->join('tours','bookings.tour_id','=','tours.id')->select('users.name as uname','tours.*','bookings.seats as seats')
            ->where('bookings.user_id',$id)
            ->get();
        $result = json_decode($book, true);

        return view('user_dashboard', compact('result'));
    }
    public function upload_image(Request $request)
    {
        $gallery = new Gallery([
            
            'image' => $request->get('Image'),
            'user_id' =>Auth::user()->id,
            'name'=> $request->get('name'),
            'details'=>$request->get('Details'),
            
        ]);

        $gallery->save();
        return back();
    }
    public function getLogout()
    {
        Auth::logout();

        return redirect('http://localhost:8000/');
    }

}
