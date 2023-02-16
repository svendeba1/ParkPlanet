<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use Auth;

class OwnerController extends Controller
{
    public function index() {
        return view ('owners');
    }

    public function store(Request $request) {
        //dd (request('adress'));
       
        // geuploade foto een unieke naam te geven
        $timestamp = now()->timestamp;
        $filename= request('picture')->getClientOriginalName();
       // dd($filename);
      
       // de velden die ingevuld zijn door de gebruiker opslaan en de owners tabel
        $owner = Owner::firstOrCreate([
        'street' => $request->input('street'),
        'city' => $request->input('city'),
        'state' => $request->input('state'),
        'rrn' => $request->input('rrn'),
        'price' => $request->input('price'),
        'user_id' => Auth::user()->id,
        'pictures' => $timestamp.'_'.$filename,
        'startdate' => $request->input('startdate'),
        'enddate' => $request->input('enddate'),
    ]);
    //error_log($filename);

    // verplaats de geuploade foto naar de public folder
    $request->picture->move(public_path('/assets/img'),$timestamp.'_'.$filename);
    return redirect('/mappage');
    }
}
