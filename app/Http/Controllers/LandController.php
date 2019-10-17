<?php

namespace App\Http\Controllers;

use App\Land;
use Illuminate\Http\Request;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function search(Request $request){
        $query = $request->query('search');
        $lands = Land::where('titleDeed','like','%'. $query.'%')

           ->orderBy('id', 'desc')
           ->take(10)
           ->get();

           return view('dashboard/land/index',compact('lands'));
           return redirect('/lands')->route('search')->with('lands',$lands);



    }
    public function index()
    {
        $lands = Land::orderBy('id', 'DESC')->paginate(15);
        return view('dashboard/land/index',compact('lands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function show(Land $land)
    {
        $land = Land::findOrfail($land->id);



        return  view('dashboard/land/show',compact('land'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function edit(Land $land)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Land $land)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Land  $land
     * @return \Illuminate\Http\Response
     */
    public function destroy(Land $land)
    {
        //
    }
}
