<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function index ()
    {
        $id = Auth::id();
        $rents = DB::table('rents')->where('user_id', $id)->get();
        return view('rent.index', compact('rents'));
    }

}
