<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // home page
    public function index()
    {
        $allBookings = DB::table('bookings')->get();
        return view('dashboard.home',compact('allBookings'));
    }

    // profile
    public function profile()
    {
        return view('profile');
    }
}
