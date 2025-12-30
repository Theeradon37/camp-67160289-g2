<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    //
    private function insert_db()
    {
        $flight = new Flight;
        $flight->name = "Test Insert Flight";
        $flight->airline = "TestAirline";
        $flight->number_of_planes = 10;
        $flight->price_per_ticket = 50.0;
        $flight->save();
    }

    private function update_db(){
        $flight = Flight::find(1);
        $flight->name = "Test Update Flight";
        $flight->save();
    }

    private function delete_db(){
        $flight = Flight::find(1);
        $flight->delete();
    }

    function index()
    {
        $data['flights'] = Flight::all();
        return view('flight.index', $data);
    }

    function store(Request $req){
        $flight = new Flight;
        $flight->name = $req->input('name');
        $flight->airline = $req->input('airline');
        $flight->number_of_planes = $req->input('number_of_planes');
        $flight->price_per_ticket = $req->input('price_per_ticket');
        $flight->save();
        return redirect('/flight');
    }

    function update($id){
        $data['flight_update'] = Flight::find($id);
        $data['flights'] = Flight::all();
        return view('flight.update', $data);
    }

    function update_action(Request $req, $id){
        $flight = Flight::find($id);
        $flight->name = $req->input('name');
        $flight->airline = $req->input('airline');
        $flight->number_of_planes = $req->input('number_of_planes');
        $flight->price_per_ticket = $req->input('price_per_ticket');
        $flight->save();
        return redirect('/flight');
    }

    function delete_action(Request $req, $id){
        $flight = Flight::find($id);
        $flight->delete();
        return redirect('/flight');
    }


}
