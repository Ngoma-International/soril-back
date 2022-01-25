<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Emploi::all();

        return view('dashboard.management.emplois', [
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
        Emploi::create(
            [
                'titre'=>$request->titre,
                'salaire'=>$request->salaire,
                'expiration'=>$request->expiration,
                'secteur'=>$request->secteur,
                'pays'=>$request->pays,
                'ville'=>$request->ville,
                'contrat'=>$request->contrat,
                'competence'=>$request->competence,
                'qualite'=>$request->qualite,
                'prerequis'=>$request->prerequis,
                'apercu'=>$request->apercu
            ]
        );

        return Redirect::back()->with('message','Emploi ajouté avec succès');
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
        if($request->pays != null){
            Emploi::where('id', $id)->update(
                [
                    'pays' => $request->pays,
                ]
            );
        }

        if($request->secteur != null){
            Emploi::where('id', $id)->update(
                [
                    'secteur' => $request->secteur,
                ]
            );
        }

        if($request->contrat != null){
            Emploi::where('id', $id)->update(
                [
                    'contrat' => $request->contrat,
                ]
            );
        }

        Emploi::where('id', $id)->update(
            [
                'titre'=>$request->titre,
                'salaire'=>$request->salaire,
                'expiration'=>$request->expiration,
                'ville'=>$request->ville,
                'competence'=>$request->competence,
                'qualite'=>$request->qualite,
                'prerequis'=>$request->prerequis,
                'apercu'=>$request->apercu
            ]
        );

        return Redirect::back()->with('message','Information modifiée avec succèss.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Emploi::where('id', $id)->delete();
        return Redirect::back()->with('message','Emploi supprimer avec success');
    }
}
