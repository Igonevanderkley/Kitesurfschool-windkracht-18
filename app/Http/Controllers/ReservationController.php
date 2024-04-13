<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index($packageId)
    {
        $chosenPackage = Packages::find($packageId);

        return view('reserve', [
            'chosenPackage' => $chosenPackage
        ]);
    }

    public function store(Request $request)
    {


        $request->validate([
            'location' => ['required'],
            'date' => ['required', 'date'],
            'time' => ['required'],
            'secondary_person_name' => [ 'max:255', 'string'],
            'secondary_person_street' => ['max:255', 'string'],
            'secondary_person_hometown' => ['max:255', 'string'],
        ]);

        $reservation = new Reservation();

        $reservation->user_id = auth()->id();
        $reservation->package_id = $request->package_id;
        $reservation->location = $request->location;
        $reservation->date = $request->date;
        $reservation->time = $request->time;


        if ($request->package_id > 1) {
            $reservation->secondary_person_name = $request->secondary_person_name;
            $reservation->secondary_person_street = $request->secondary_person_street;
            $reservation->secondary_person_hometown = $request->secondary_person_hometown;
        }
        $reservation->is_paid = false;
        $reservation->save();

        return redirect()->route('/reservations');
    }
}
