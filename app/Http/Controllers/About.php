<?php

namespace App\Http\Controllers;

use App\Models\ConseilAdmin;
use App\Models\managementSecretariate;
use Illuminate\Http\Request;

class About extends Controller
{
    //
    public function home(){

        $admin = ConseilAdmin::all();
        $secretariats = managementSecretariate::all();

        return view('about.about', [
            'admin'=>$admin,
            'secretariats'=>$secretariats
        ]);
    }
}
