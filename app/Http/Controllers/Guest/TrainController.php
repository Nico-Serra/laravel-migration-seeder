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
        $trainsToday = Train::where('data', '2024-05-10')->get();


        $trainsOtherDay = Train::where('data', '!=', '2024-05-10')->orderBy('data', 'asc')->get();
        //dd($trainsOtherDay);
        $data = [
            'trains' => [
                'trainsToday' => $trainsToday,
                'trainsOtherDay' => $trainsOtherDay
            ]
        ];
        //dd($data);
        return view('guests.trains', $data);
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
