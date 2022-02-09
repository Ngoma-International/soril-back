<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ConseilController extends Controller
{
    public function techniques(){
        return view('conseil.techniques');
    }

    public function articles(){
        $arts = Article::orderBy('id', 'desc')->get();
        return view('conseil.articles',
        [
            'arts'=>$arts
        ]);
    }

    public function moreinfo(Request $request){
        return view('conseil.moreinfo');
    }

    public function logOut(Request $request){
        $value = $request->session()->pull('subscribe', 'default');
        return redirect('subscribe')->with('message', 'log out successfully');
    }
}
