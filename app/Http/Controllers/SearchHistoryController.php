<?php

namespace App\Http\Controllers;

use App\Land;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
