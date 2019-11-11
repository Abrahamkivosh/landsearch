<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClerkController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth:admin");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clerks = Admin::where('job_title', 'clerk')
        //    ->orderBy('id', 'desc')
        //    ->take(10)
        //    ->get();
           $clerks = Admin::all();
        return view("admin.clerk.index",compact('clerks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.clerk.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(array(
            'name' => 'required|string',
            'phone'=>"required",
            'email'=>"required|email|unique:admins,email",
            "password"=>"required|min:6",
            "job_title"=>"required"
        ));
        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));
        $store =Admin::create($data);
        return redirect()->route('clerks.index')->with("success","New Admin created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clerk = Admin::find($id)->delete();
        return back()->with("success","clerk Deleted Successfully");
    }
}
