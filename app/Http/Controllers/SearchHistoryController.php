<?php

namespace App\Http\Controllers;

use App\Land;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SearchHistoryController extends Controller
{
    public function landSearch($id)
    {
        $search = User::findOrfail($id)->lands;
        return view('dashboard/history',compact('search'));
    }

    public function singleSearch($id , $land){
        $user = User::findOrfail($id);
        $land = Land::findOrfail($land);

        return view('dashboard/singleHistory',compact('user','land'));
    }

    // public function printsingleSearch($id , $land){
    //     $user = User::findOrfail($id);
    //     $land = Land::findOrfail($land);

    //     return view('dashboard/singleHistory',compact('user','land'));
    // }

    public function storeSearch(Request $request , $id){
        $user = Auth::user();
        $user_id = $id;
        $land_id = $request->input('land_id');

        $user->lands()->attach([$user_id, $land_id]);
        return redirect()->route('allSearch',$user_id);
    }
}
