<?php

namespace App\Http\Controllers;

use App\Models\ConseilAdmin;
use App\Models\managementSecretariate;
use App\Models\Partenaire;
use Illuminate\Http\Request;

class About extends Controller
{
    //
    public function home(){

        $admin = ConseilAdmin::all();
        $secretariats = managementSecretariate::all();
        $consultatifs = \App\Models\Consultatif::all();
        $partenaires = Partenaire::all();

        return view('about.about', [
            'admins'=>$admin,
            'secretariats'=>$secretariats,
            'consultatifs'=>$consultatifs,
            'partenaires'=>$partenaires
        ]);
    }
}
