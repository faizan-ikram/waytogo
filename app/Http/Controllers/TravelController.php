<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;
use App\Travel;
use Illuminate\Support\Facades\Hash;

class TravelController extends Controller
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
        $travel = Travel::all()->toArray();

        return view('Travel.index', compact('travel'));
    }
    public function show()
    {
        $tour = Tour::all()->toArray();

        return view('Travel.show_admin_tour', compact('tour'));



        //  $tour = Tour::all()->toArray();

        // return view('Tour.index', compact('tour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Travel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $travel = new Travel([
            'CompanyName' => $request->get('CompanyName'),
            'Image' => $request->get('Image'),
            'email' =>$request->get('email'),
            'password' =>Hash::make($request->get('password')),
        ]);

        $travel->save();

        return redirect('/Travel');
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
        $travel = Travel::find($id);



        return view('Travel.edit', compact('travel','id'));

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
        $travel = Travel::find($id);
        $travel->CompanyName = $request->get('CompanyName');
        $travel->Image = $request->get('Image');
        $travel->email = $request->get('email');
        $travel->password = Hash::make($request->get('password'));
        $travel->save();

        return redirect('/Travel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travel = Travel::find($id);
        $travel->delete();

        return redirect('/Travel');
    }
}
