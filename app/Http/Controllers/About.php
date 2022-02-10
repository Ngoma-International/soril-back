<?php

namespace App\Http\Controllers;

use App\Models\ConseilAdmin;
use App\Models\managementSecretariate;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class About extends Controller
{
    //
    public function home(){

        $admin = ConseilAdmin::all();
        $secretariats = managementSecretariate::all();
        $consultatifs = \App\Models\Consultatif::all();
        $partenaires = Partenaire::where('status', 1)->get();

        return view('about.about', [
            'admins'=>$admin,
            'secretariats'=>$secretariats,
            'consultatifs'=>$consultatifs,
            'partenaires'=>$partenaires
        ]);
    }

    public function partenaire(){
        return view('about.register');
    }

    public function send(Request $request){

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

        return Redirect()->route('about')->with('message','Your request as send, please an allow by organisation');
    }
}
