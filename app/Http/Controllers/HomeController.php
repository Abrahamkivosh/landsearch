<?php

namespace App\Http\Controllers;

use Auth;
use App\Land;
use App\User;
use Illuminate\Http\Request;

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
    // public function index()
    // {
    //     return view('home');
    // }

    public function searchLand(Request $request){
        $titleDeed = $request->input('titleDeed');
        $search  = Land::where('titleDeed', $titleDeed)->get();

        return view('home',compact('search'));
    }
    public function map(){
        return view('dashboard.map');
    }

}
