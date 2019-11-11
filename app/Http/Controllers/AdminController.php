<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\Land;
use App\User;
use App\LandOwner;
class AdminController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth:admin');
   }
    public function index()
    {
        $users = User::all();
        $land = Land::all();
        $admin = Admin::all();
        return view('admin.dashboard',compact('users','land','admin'));
    }

    public function owners(){
        $owners = LandOwner::all();;
        return view("admin/owners/allowners",compact('owners'));
    }
    public function profile($id){
        $admin = Admin::findOrfail($id);
        return view("admin.profile")->with('admin',$admin);
    }

}
