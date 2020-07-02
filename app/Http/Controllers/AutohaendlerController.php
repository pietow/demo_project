<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autodealer;

class AutohaendlerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Autodealer $autodealer)
    {
        
        $dealer = \App\Autodealer::all();
        #return view('plz', array('ausgabe'=>$dealer));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
        
        #$dealer = \App\Autodealer::all();
        
        #$dealer1 = $dealer->where('plz_id',$id);
        #echo ($dealer1->getFirstNameAttribute($id));
        $dealer1 = new \App\Autodealer();
       # $dealer = $dealer->getFirstNameAttribute($id);
        $distance = $dealer1->getFirstNameAttribute($id);
       # $data = array('ausgabe'=>$dealer);
        return view('plz')->with('ausgabe', $distance);

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
