<?php

namespace App\Http\Controllers;

use App\Models\Animateur;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AnimateurControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animateur = Animateur::orderby('id')->get();
        $evenements = Evenement::all();
        return view('dashboard.evenement.animateurs', [
            'animateurs'=>$animateur,
            'evenements'=>$evenements
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

        $request->file->move(public_path('images/dashboard/animateurs'), $name);

        Animateur::create(
            [
                'prenom'=>$request->prenom,
                'nom'=>$request->nom,
                'organisation'=>$request->organisation,
                'position'=>$request->position,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'pays'=>$request->pays,
                'description'=>$request->description,
                'image'=>'images/dashboard/animateurs/'.$name,
            ]
        );

        return Redirect::back()->with('message','Animateur ajouté avec succèss !');
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
        if($request->image != null)
        {
            $name = time().'.'.request()->file->getClientOriginalExtension();

            $request->file->move(public_path('images/dashboard/animateurs'), $name);
            Animateur::where('id', $id)->update(
                [
                    'image'=>'images/dashboard/animateurs/'.$name,
                ]
            );
        }

        if($request->pays != null){
            Animateur::where('id', $id)->update(
                [
                    'pays'=>$request->pays,
                ]
            );
        }

        Animateur::where('id', $id)->update(
            [
                'prenom'=>$request->prenom,
                'nom'=>$request->nom,
                'organisation'=>$request->organisation,
                'position'=>$request->position,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'description'=>$request->description,
            ]
        );

        return Redirect::back()->with('message','Information mise à jour avec succèss !');
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

    public function update_animateur(Request $request){
        Evenement::where('id', $request->event)
            ->update(
                [
                    'animateur'=>$request->anim
                ]
            );
        return Redirect::back()
            ->with('message', 'animateur attribué à un évenement avec succèss.');
    }
}
