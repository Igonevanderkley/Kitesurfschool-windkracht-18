<?php

namespace App\Http\Controllers;

use App\Models\Packages;

class ReservationController extends Controller
{
    public function index($packageId)
    {
        $chosenPackage = Packages::find($packageId);

        return view('reserve', [
            'chosenPackage' => $chosenPackage   
        ]);
    }
}
