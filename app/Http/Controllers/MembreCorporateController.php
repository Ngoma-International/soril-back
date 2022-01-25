<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Collective;
use Illuminate\Http\Request;

class MembreCorporateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Collective::all();
        return view('dashboard/membres/corporate', [
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
        Collective::where('id', $request->id)
            ->update([
                'name'=>$request->name,
                'industry'=>$request->industry,
                'country'=>$request->country,
                'city'=>$request->city,
                'province'=>$request->province,
                'website'=>$request->website,
                'firstName'=>$request->firstName,
                'lastName'=>$request->lastName,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'fFirstName'=>$request->ffirstName,
                'fLastName'=>$request->flastName,
                'fEmail'=>$request->femail,
                'fPhone'=>$request->fphone
            ]);

        return back()->with('message', 'Information mise à jour');
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
            Collective::where('id', $request->name)
                ->update([
                    'com1statut'=>!$request->statut
                ]);
        }
        else if($id == 0){
            Collective::where('id', $request->name)
                ->update([
                    'statut'=>!$request->statut
                ]);
        }
        return back()->with('message', 'Statut changé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Collective::where('id', $id)->delete();
        return back()->with('message', 'Corporate supprimée');
    }
}
