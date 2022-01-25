<?php

namespace App\Http\Controllers;

use App\Models\managementSecretariate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretariat = managementSecretariate::orderBy('id', 'DESC')->get();
        return view('dashboard.management.secretariat', [
            'secretariat'=>$secretariat
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

        managementSecretariate::create(
            [
                'prenom'=>$request->prenom,
                'nom' =>$request->nom,
                'type' =>$request->type,
                'email' => $request->email,
                'phone' =>$request->phone,
                'image'=>'images/dashboard/membres/'.$name,
                'pays'=>$request->pays,
                'about'=>$request->about,
                'password'=>$request->password,
            ]
        );

        return Redirect::back()->with('message','Membres ajouter avec success');
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
            managementSecretariate::where('id', $id)->update(
                [
                    'image'=>'images/dashboard/membres/'.$name,
                ]
            );
        }
        if($request->type != null){
            managementSecretariate::where('id', $id)->update(
                [
                    'type'=>$request->type,
                ]
            );
        }

        if($request->pays != null){

            managementSecretariate::where('id', $id)->update(
                [
                    'pays'=>$request->pays,
                ]
            );
        }

        managementSecretariate::where('id', $id)->update(
            [
                'prenom'=>$request->prenom,
                'nom' =>$request->nom,
                'email' => $request->email,
                'phone' =>$request->phone,
                'about'=>$request->about,
                'password'=>$request->password,
            ]
        );

        return Redirect::back()->with('message','Modification effectuée avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        managementSecretariate::where('id', $id)->delete();
        return Redirect::back()->with('message','Membre supprimer avec success');
    }
}
