<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /*
    public function saison($id){

        $serie=Serie::findOrFail($id);
        $nbsaions=count($serie->episodes->unique('saison'));
        echo $nbsaions;


    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $series = Serie::orderBy('nom', 'asc')->get();
        return view('series.index',['series'=>$series]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        $test = Serie::select('*')->from('serie')->where('Gigolo', '=', '1')->get();
        $test1 = Serie::all();
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serie = Serie::findOrFail($id);
        $episode = Episode::select('*')->from('episodes')->where('serie_id','=',$serie->id)->orderBy('id', 'asc')->get();
        return view('series.show',['serie'=>$serie],['episode'=>$episode]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
