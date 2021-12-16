<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Episode;
use App\Models\Serie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;


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
    }
    public function tri($input)
    {
        if($input=='nom'){
            $series = Serie::orderBy('nom','asc')->get();
            return view('series.index', ['series' => $series]);
        }
        if($input=='genre') {
            $series = Serie::orderBy('genre', 'asc')->get();
            return view('series.index', ['series' => $series]);
        }
        if($input=='premiere'){
            $series = Serie::orderBy('premiere','desc')->get();
            return view('series.index', ['series' => $series]);
        }
        if($input=='note'){
            $series = Serie::orderBy('note','asc')->get();
            return view('series.index', ['series' => $series]);
        }
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
        $this-> validate($request,['commentaire'=>'required',
                                    'note'=>'required']);
        $comments = new Comment();
        $comments -> content = request('commentaire');
        $comments -> note = request('note');
        $comments -> user_id = Auth::user()->id;
        $comments -> validated = 0;
        $comments -> serie_id= request('id');
        $comments->save();
        return back();

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
        $episode = Serie::select('*')->from('episodes')->where('serie_id','=',$serie->id)->orderBy('id', 'asc')->get();
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
