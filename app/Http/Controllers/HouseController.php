<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class HouseController extends Controller
{
    public function index ()
    {
        $id = Auth::id();
        $houses = DB::table('houses')->where('user_id', $id)->get();
        return view('house.index', compact('houses'));
    }

    public function create()
    {
        return view('house.product_register');
    }

    public function store(Request $request)
    {
        $house = $request->validate([
            'house_name' => 'required',
        ]);

        $house['user_id'] = Auth::id();
        $house['slug'] = Str::slug($house['house_name']);

        House::create($house);

        return Redirect::route('houses');
    }
}
