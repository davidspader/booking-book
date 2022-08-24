<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function index (User $user, House $house)
    {
        $rents = DB::table('rents')->where('user_id', $user->id)->where('house_id', $house->id)->get();
        return view('rent.index', compact(['rents', 'house']));
    }

}
