<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseRequest;
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
        return view('house.house_register');
    }

    public function store(HouseRequest $request)
    {
        $house = $request->validated();

        $house['user_id'] = Auth::id();
        $house['slug'] = Str::slug($house['house_name']);

        House::create($house);

        return Redirect::route('houses');
    }

    public function edit(House $house)
    {
        return view('house.house_edit', compact('house'));
    }

    public function update(House $house, HouseRequest $request)
    {
        $houseValid = $request->validated();

        $house->fill($houseValid);
        $house->save();
        return Redirect::route('houses');
    }

    public function destroy(House $house)
    {
        $house->delete();
        return Redirect::route('houses');
    }
}
