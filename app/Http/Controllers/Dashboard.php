<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class Dashboard extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function management(Request $request){
        $user = Auth::user();
        $data = UserData::where('user_id', '=', $user->id)->firstOrFail();
        return view('dashboard.management.management', [
            'user'=>$user,
            'data'=>$data
        ]);
    }

    public function update(Request $request){

        if(!empty($request->password) && Hash::check($request->password, Auth::user()->password)){
            if(!empty($request->nom)){
                User::where('id', Auth::user()->id)->update(['name'=>$request->nom]);
            }
            if (!empty($request->phone)){
                UserData::where('user_id', Auth::user()->id)->update(['phone'=>$request->phone]);
            }
            if (!empty($request->about)){
                UserData::where('user_id', Auth::user()->id)->update(['about'=>$request->about]);
            }
            if (!empty($request->password1)){
                User::where('id', Auth::user()->id)->update(['password'=>Hash::make($request->password1)]);
            }

            return Redirect::back()->with('message','Operation Successful !');
        }
        else {
            return Redirect::back()->with('message','Operation échoué, vérifié le mot de passe de confiramtion !');
        }
    }
}
