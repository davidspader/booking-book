<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function index ()
    {
        $id = Auth::id();
        $houses = DB::table('houses')->where('user_id', $id)->get();
        return view('house.index', compact('houses'));
    }
}
