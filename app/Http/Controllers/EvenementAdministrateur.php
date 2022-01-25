<?php

namespace App\Http\Controllers;

use App\Models\Animateur;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EvenementAdministrateur extends Controller
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
        return view('dashboard.evenement.evenement', [
            'membres'=>$membres,
            'animateurs'=>$animateurs
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

        $request->file->move(public_path('images/dashboard/membres'), $name);

        Evenement::create(
            [
                'typeEvent'=>$request->typeEvent,
                'titre'=>$request->titre,
                'sousTitre'=>$request->sousTitre,
                'lieu'=>$request->lieu,
                'duree' =>$request->duree,
                'date'=>$request->date,
                'animateur'=>$request->animateur,
                'speaker'=>$request->speaker == 1 ? true : false,
                'ville'=>$request->ville,
                'apercu'=>$request->apercu,
                'participer'=>$request->participer,
                'prerequis'=>$request->prerequis,
                'certification'=>$request->certification,
                'type'=>$request->type,
                'prix'=>$request->prix,
                'description'=>$request->description,
                'image'=>'images/dashboard/membres/'.$name,
            ]
        );

        return Redirect::back()->with('message','Evenement ajouté avec succèss');
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
        if($request->file != null)
        {
            $name = time().'.'.request()->file->getClientOriginalExtension();

            $request->file->move(public_path('images/dashboard/membres'), $name);
            Evenement::where('id', $id)->update(
                [
                    'image'=>'images/dashboard/membres/'.$name,
                ]
            );
        }

        if($request->typeEvent != null){
            Evenement::where('id', $id)->update(
                [
                    'typeEvent'=>$request->typeEvent,
                ]
            );
        }

        if($request->animateur != null){
            Evenement::where('id', $id)->update(
                [
                    'animateur'=>$request->animateur,
                ]
            );
        }

        if($request->ville != null){
            Evenement::where('id', $id)->update(
                [
                    'ville'=>$request->ville,
                ]
            );
        }

        if($request->type != null){
            Evenement::where('id', $id)->update(
                [
                    'type'=>$request->type,
                ]
            );
        }

        Evenement::where('id', $id)->update(
            [
                'titre'=>$request->titre,
                'sousTitre'=>$request->sousTitre,
                'lieu'=>$request->lieu,
                'duree' =>$request->duree,
                'date'=>$request->date,
                'speaker'=>$request->speaker == 1 ? true : false,
                'apercu'=>$request->apercu,
                'participer'=>$request->participer,
                'prerequis'=>$request->prerequis,
                'certification'=>$request->certification,
                'prix'=>$request->prix,
                'description'=>$request->description,
            ]
        );

        return Redirect::back()->with('message','Modification effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evenement::where('id', $id)->delete();

        return Redirect::back()->with('message','Evenement supprimé avec succès !');
    }
}
