<?php

namespace App\Http\Controllers;

use App\Models\Animateur;
use App\Models\Evenement;
use App\Models\EventProgramme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Evenement::findOrFail($request->id);

        $membres = EventProgramme::where('evenement_id', '=', $events->id)->get();

        $anims = Animateur::all();

        //dd($membres->id);

        return view('dashboard.evenement.programme', [
            'membres'=>$membres,
            'events' => $events,
            'anims'=>$anims
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
        EventProgramme::create(
            [
                'evenement_id'=>$request->evenement_id,
                'date'=>$request->date,
                'time'=>$request->time,
                'facilitator'=>$request->facilitator,
                'header'=>$request->header,
                'title'=>$request->title
            ]
        );

        return Redirect::back()->with('message','Activité ajoutée !');
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
        if($request->facilitator != null){
            EventProgramme::where('id', $id)->update(
                [
                    'facilitator'=>$request->facilitator,
                ]
            );
        }


        EventProgramme::where('id', $id)->update(
            [
                'date'=>$request->date,
                'time'=>$request->time,
                'header'=>$request->header,
                'title'=>$request->title
            ]
        );

        return Redirect::back()->with('message','Mise à jour des données effectuées avec succèss !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EventProgramme::where('id', $id)->delete();

        return Redirect::back()->with('message','Activité supprimé !');
    }
}
