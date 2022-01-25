<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Partenaire::all();

        return view('dashboard.management.partenaires', [
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

        Partenaire::create(
            [
                'nom' =>$request->nom,
                'organisation' =>$request->organisation,
                'position' => $request->position,
                'pays' =>$request->pays,
                'image'=>'images/dashboard/membres/'.$name,
                'email'=>$request->email,
                'phone'=>$request->phone
            ]
        );

        return Redirect::back()->with('message','Partenaires ajoutés !');
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
            Partenaire::where('id', $id)->update(
                [
                    'image'=>'images/dashboard/membres/'.$name,
                ]
            );
        }

        if($request->pays != null){
            Partenaire::where('id', $id)->update(
                [
                    'pays' => $request->pays,
                ]
            );
        }

        Partenaire::where('id', $id)->update(
            [
                'nom' =>$request->nom,
                'organisation' =>$request->organisation,
                'position'=>$request->position,
                'email'=>$request->email,
                'phone'=>$request->phone,
            ]
        );

        return Redirect::back()->with('message','Information sur le partenaire modifiée. !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partenaire::where('id', $id)->delete();
        return Redirect::back()->with('message','Partenaire supprimer avec success');
    }
}
