<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConseilController extends Controller
{
    public function techniques(){
        return view('conseil.techniques');
    }

    public function qualifications(){
        return view('conseil.qualifications');
    }
}
