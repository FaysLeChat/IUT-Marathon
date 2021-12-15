<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class ControllerIndex extends Controller
{
    public function index()
    {
        $serie = Serie::all();
        return view('index',['serie'=>$serie]);
        //
    }
}
