<?php

namespace App\Http\Controllers;


use App\Booking;
use App\Tour;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function booking($tour_id,Request $request)
    {
        if(Auth::user()) {
            $tempid=Auth::user()->id;
            $tour=Tour::where('id','=',$tour_id)->first();
            if (Booking::where('user_id', '=', $tempid)->where('tour_id','=',$tour_id)->exists()) {
                Session::flash('flash_message', 'Already Booked');
            }
            else
            {

                if(!(($request->seats)>0))
                {
                    Session::flash('flash_message', 'Seats Must Be Greater Than 0');
                }
                else if(($request->seats)>(($tour->NSA)-($tour->NRP)))
                {
                    Session::flash('flash_message', ' Number of seats entered exceed the seats that are available');
                }
                else {

                    $book = new Booking([
                        'user_id' => Auth::user()->id,
                        'tour_id' => $tour_id,
                        'seats' => $request->seats,
                    ]);

                    $book->save();

                    Session::flash('flash_message', 'Booked');

                    $tour = Tour::where('id', $tour_id)->first();
                    $tour->NRP = ($tour->NRP + $request->seats);
                    $tour->save();
                }
            }
            return redirect()->back();
        }
        else {
            Session::flash('flash_message', 'Please Login to Book Tours');
            return redirect('/login');
        }

    }
   
    public function destroy($tour_id)
    {
        $book = Booking::where('tour_id',$tour_id)->where('user_id', Auth::user()->id)->first();
        $temp=$book->seats;
        $tour=Tour::where('id', $tour_id)->first();
        $tour->NRP=($tour->NRP-$temp);
        $book->delete();

        $tour->save();
        return redirect('/DashBoard');
    }
}
