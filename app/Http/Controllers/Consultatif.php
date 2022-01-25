<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Consultatif extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = \App\Models\Consultatif::all();

        return view('dashboard.management.conseilconsultatif', [
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
        $name = time().'.'.request()->file->getClientOriginalExtension();

        $request->file->move(public_path('images/dashboard/membres'), $name);

        \App\Models\Consultatif::create(
            [
                'prenom'=>$request->prenom,
                'nom' =>$request->nom,
                'organisation' =>$request->organisation,
                'position' => $request->position,
                'about' =>$request->about,
                'image'=>'images/dashboard/membres/'.$name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'type'=>$request->type
            ]
        );

        return Redirect::back()->with('message','Conseiller Ajouté !');
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
            \App\Models\Consultatif::where('id', $id)->update(
                [
                    'image'=>'images/dashboard/membres/'.$name,
                ]
            );
        }

        if($request->type != null){
            \App\Models\Consultatif::where('id', $id)->update(
                [
                    'type' => $request->type,
                ]
            );
        }

        \App\Models\Consultatif::where('id', $id)->update(
            [
                'prenom'=>$request->prenom,
                'nom' =>$request->nom,
                'organisation' =>$request->organisation,
                'about'=>$request->about,
                'position'=>$request->position,
                'email'=>$request->email,
                'phone'=>$request->phone,
            ]
        );

        return Redirect::back()->with('message','Mise à jour effectuée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Models\Consultatif::where('id', $id)->delete();
        return Redirect::back()->with('message','Membre supprimer avec success');
    }
}
