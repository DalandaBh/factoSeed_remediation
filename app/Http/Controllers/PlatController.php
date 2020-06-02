<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plat;
use App\Saveur;

class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plats=Plat::all();
        $saveurs=Saveur::all();

        return view('plats.index',compact('plats','saveurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plats=Plat::all();
        $saveurs=Saveur::all();

        return view('plats.create',compact('plats','saveurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plat=new Plat();

        $plat->name=request('name');
        $plat->saveur_id=request('saveur_id');

        $plat->save();

        return redirect()->route('plats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plat=Plat::find($id);
        $saveurs=Saveur::all();

        return view('plats.edit',compact('plat','saveurs'));
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
        $plat=Plat::find($id);

        $plat->name=request('name');
        $plat->saveur_id=request('saveur_id');

        $plat->save();

        return redirect()->route('plats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plat=Plat::find($id)->delete();

        return redirect()->back();
    }
}
