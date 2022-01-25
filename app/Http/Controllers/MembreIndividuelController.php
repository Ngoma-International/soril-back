<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Individual;
use Illuminate\Http\Request;

class MembreIndividuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Individual::all();
        return view('dashboard/membres/individual', [
            'membres'=>$membres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Individual::where('id', $request->id)
            ->update([
                'firstName'=>$request->firstName,
                'lastName'=>$request->lastName,
                'city'=>$request->city,
                'state'=>$request->state,
                'period'=>$request->period,
                'dpcpoint'=>$request->dcppoint,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'country'=>$request->country
            ]);
        return back()->with('message', 'Information sur le membre mise à jour.');
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
        if($id == 1){
            Individual::where('id', $request->name)
                ->update([
                   'com1statut'=>!$request->statut
                ]);
        }
        else if($id == 2){
            Individual::where('id', $request->name)
                ->update([
                    'com2statut'=>!$request->statut
                ]);
        } else if($id == 3){
            Individual::where('id', $request->name)
                ->update([
                    'com3statut'=>!$request->statut
                ]);
        }
        else if($id == 0){
            Individual::where('id', $request->name)
                ->update([
                    'statut'=>!$request->statut
                ]);
        }
        return back()->with('message', 'Statut activé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Individual::where('id', $id)->delete();
        return back()
            ->with('message', 'Membre supprimé.');
    }
}
