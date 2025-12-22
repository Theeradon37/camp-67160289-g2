<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WorkShop  extends Controller{
    public function index(){
        return $this->MYFUNCTION();
    }
    function myfunction(){
        return view('html101');
    }
    public function store(Request $request){
        $data['myfname'] = $request->input('fname');
        $data['mylname'] = $request->input('lname');
        $data['mybdate'] = $request->input('bdate');
        $data['mygender'] = $request->input('gender');
        $data['myaddress'] = $request->input('address');
        $data['myfavcolor'] = $request->input('favcolor');
        return view('homework.show', $data);
    }
}

