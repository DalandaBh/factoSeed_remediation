<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres=Livre::all();

        return view('livres.index',compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livre= new Livre();

        $livre->title=request('title');
        $livre->author=request('author');
        $livre->year=request('year');

        $livre->save();

        return redirect()->route('livres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $livre =Livre::find($id);

       return view('livres.show',compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livre=Livre::find($id);

        return view('livres.edit',compact('livre'));
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
        $livre=Livre::find($id);

        $livre->title=request('title');
        $livre->author=request('author');
        $livre->year=request('year');

        $livre->save();

        return redirect()->route('livres.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livre=Livre::find($id)->delete();

        return redirect()->back();
    }
}
