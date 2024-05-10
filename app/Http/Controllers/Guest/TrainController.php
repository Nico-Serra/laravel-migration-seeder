<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trains = Train::all();
        //dd($trains);
        return view('guests.trains', compact('trains'));
    }

    
    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        //dd($train);
        return view('guests.train', compact('train'));
    }

}
