<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MessagePresident extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = \App\Models\MessagePresident::all();

        return view('dashboard.management.president', [
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

        \App\Models\MessagePresident::create(
            [
                'prenom'=>$request->prenom,
                'nom' =>$request->nom,
                'date' =>$request->date,
                'introduction' => $request->introduction,
                'about' =>$request->about,
                'image'=>'images/dashboard/membres/'.$name,
                'message'=>$request->message,
                'titreAuteur'=>$request->titreAuteur,
                'titreMessage'=>$request->titreMessage
            ]
        );

        return Redirect::back()->with('message','Message publié avec succèss !');
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
            \App\Models\MessagePresident::where('id', $id)->update(
                [
                    'image'=>'images/dashboard/membres/'.$name,
                ]
            );
        }

        if($request->date != null){
            \App\Models\MessagePresident::where('id', $id)->update(
                [
                    'date' => $request->date,
                ]
            );
        }

        \App\Models\MessagePresident::where('id', $id)->update(
            [
                'prenom'=>$request->prenom,
                'nom' =>$request->nom,
                'introduction' =>$request->introduction,
                'about'=>$request->about,
                'message'=>$request->message,
                'titreAuteur'=>$request->titreAuteur,
                'titreMessage'=>$request->titreMessage
            ]
        );

        return Redirect::back()->with('message','Message modifié avec success.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Models\MessagePresident::where('id', $id)->delete();
        return Redirect::back()->with('message','Message supprimer avec success');
    }
}
