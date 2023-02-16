<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Geocodio;
use DB;
use Mapper;
use App\Models\Owner;

class GeocoderController extends Controller
{
    public  function index()  
    {  
        // info uit db halen
        $address = DB::select('select street, city, state from owners');
        $owners = DB::select('select * from owners');
        //dd($address);

        // nieuwe instance van geocoder maken enapi key in orde zetten
        $geocoder = new Geocodio\Geocodio();
        $geocoder->setApiKey('b4a0c23064b4434c64ca446ca30224baca24ac3');

        // location (latitude en longitude) uit de array halen die we terug krijgen van de API
        $response = $geocoder->geocode($address);
        //dd($response);
        $results = $response->results;
        //dd($coordinates);
        $response = array_column($results, 'response');
        //dd($location);
        $results2 = array_column($response, 'results');
        //dd($test);
        $empty = array_column($results2, '0');
        //dd($blabla);
        $source = array_column($empty, 'source');
        //dd($test3);
        $locations = array_column($empty, 'location');
        //dd($blablabla);

        // map maken
        Mapper::map(40.9242, -101.7542, ['marker' => false]);

        // markers op de map plaatsen op de plaats van de coordinaten die we krijgen van de API
        foreach ($locations as $location) {
            Mapper::informationWindow($location->lat, $location->lng, '<a href="/details/{id}"> Rent Parking </a>');
        };

        return view ('/mappage', compact('owners'));
    }
    // route naar details page (met owners)
    public function detail($id) {
        $owners = DB::select('SELECT * FROM owners');
        //dd($owneralso);
        $ids = array_column($owners, 'id');
        //dd($tester);
        foreach ($ids as $id) {
        //dd($testen);
        $owners = DB::select('SELECT * FROM owners WHERE id = ' . $id);
        //dd($owner);
        return view('details', compact('owners'));
        };
    }
}