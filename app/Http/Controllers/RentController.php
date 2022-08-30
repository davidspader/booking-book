<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentRequest;
use App\Models\House;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RentController extends Controller
{
    public function index (User $user, House $house)
    {
        $rents = DB::table('rents')->where('user_id', $user->id)->where('house_id', $house->id)->orderBy('final_date')->get();
        return view('rent.index', compact(['rents', 'house']));
    }

    public function create(User $user, House $house)
    {
        return view('rent.rent_create', compact(['user', 'house']));
    }

    public function store(User $user, House $house, RentRequest $request)
    {
        $rent = $request->validated();

        $rent['user_id'] = $user->id;
        $rent ['house_id'] = $house->id;

        Rent::create($rent);

        return Redirect::route('rents', [$user->id, $house->id]);
    }

    public function edit(User $user, Rent $rent)
    {
        return view('rent.rent_edit', compact(['user', 'rent']));
    }

    public function update(User $user, Rent $rent, RentRequest $request)
    {
        $rentValid = $request->validated();

        $rent->fill($rentValid);
        $rent->save();

        return Redirect::route('rents', [$user->id, $rent->house_id]);
    }

    public function destroy(User $user, Rent $rent)
    {
        $rent->delete();
        return Redirect::route('rents', [$user->id, $rent->house_id]);
    }

}
