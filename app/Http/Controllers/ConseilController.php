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

    public function moreinfo(Request $request){
        return view('conseil.moreinfo');
    }

    public function logOut(Request $request){
        $value = $request->session()->pull('subscribe', 'default');
        return redirect('subscribe')->with('message', 'log out successfully');
    }
}
