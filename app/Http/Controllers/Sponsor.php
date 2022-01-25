<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Animateur;
use App\Models\Evenement;
use App\Models\SponsorEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Sponsor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animateurs = Animateur::all();
        $membres = Evenement::all();
        $sponsor = \App\Models\Sponsor::all();
        return view('dashboard.evenement.sponsor', [
            'evenements'=>$membres,
            'animateurs'=>$animateurs,
            'sponsors'=>$sponsor
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
        $name = time().'.'.request()->file->getClientOriginalExtension();

        $request->file->move(public_path('images/dashboard/sponsors'), $name);

        \App\Models\Sponsor::create(
            [
                'organisation'=>$request->organisation,
                'pays'=>$request->pays,
                'nom'=>$request->nom,
                'position'=>$request->position,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'description'=>$request->description,
                'image'=>'images/dashboard/sponsors/'.$name,
            ]
        );

        return Redirect::back()->with('message','Sponsors ajouté avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        if($request->file != null)
        {
            $name = time().'.'.request()->file->getClientOriginalExtension();

            $request->file->move(public_path('images/dashboard/sponsors'), $name);
            \App\Models\Sponsor::where('id', $id)->update(
                [
                    'image'=>'images/dashboard/sponsors/'.$name,
                ]
            );
        }

        if($request->pays != null){
            \App\Models\Sponsor::where('id', $id)->update(
                [
                    'pays'=>$request->pays,
                ]
            );
        }

        \App\Models\Sponsor::where('id', $id)->update(
            [
                'organisation'=>$request->organisation,
                'nom'=>$request->nom,
                'position'=>$request->position,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'description'=>$request->description,
            ]
        );

        return Redirect::back()->with('message','Sponsors mises à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Models\Sponsor::where('id', $id)->delete();

        return Redirect::back()->with('message','Sponsors supprimé avec succès !');
    }

    public function sponsors(Request $request)
    {
        SponsorEvent::create([
           'evenement_id'=>$request->event,
            'sponsor_id'=>$request->sponsor
        ]);
        return Redirect::back()->with('message','Sponsors attribué avec succès !');
    }
}
