<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
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
        $tour = Tour::where('CompanyId', $id)
            ->get();
        return view('Tour.index', compact('tour'));

      //  $tour = Tour::all()->toArray();

       // return view('Tour.index', compact('tour'));
    }

    public function show()
    {
        $id=Auth::user()->id;
        $book = DB::table('bookings')->join('users', 'bookings.user_id', '=', 'users.id')->join('tours','bookings.tour_id','=','tours.id')->select('users.name as uname', 'tours.*','bookings.seats as seats')
            ->where('tours.CompanyId',$id)
            ->get();
        $result = json_decode($book, true);
        return view('Tour.index1', compact('result'));


        //  $tour = Tour::all()->toArray();

        // return view('Tour.index', compact('tour'));
    }
    public function create()
    {
        return view('Tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour = new tour([
            'CompanyId' => Auth::user()->id,
            'name' => $request->get('name'),
            'days' => $request->get('days'),
            'Image' => $request->get('Image'),
            'Details' => $request->get('Details'),
            'Budget' => $request->get('Budget'),
            'NSA' => $request->get('NSA'),
            'departure' => $request->get('departure'),
            'discount' => $request->get('discount'),
        ]);

        $tour->save();

        return redirect('/Tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);



        return view('Tour.edit', compact('tour','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tour = Tour::find($id);
        $tour->name = $request->get('name');
        $tour->days = $request->get('days');
        $tour->Image = $request->get('Image');
        $tour->Details = $request->get('Details');
        $tour->Budget = $request->get('Budget');
        $tour->NSA = $request->get('NSA');
        $tour->departure = $request->get('departure');
        $tour->discount = $request->get('discount');
        $tour->save();

        return redirect('/Tour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $tour->delete();

        return redirect('/Tour');
    }
}
