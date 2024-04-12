<?php

// use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\Packages;

class HomepageController extends Controller
{
    public function index()
    {
        $packages = Packages::all();

        return view('homepage', [
            'packages' => $packages
        ]);
    }
}