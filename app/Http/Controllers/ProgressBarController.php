<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProgressBarController extends Controller
{
    public function uploadToServer(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

        $name = time().'.'.request()->file->getClientOriginalExtension();

        $request->file->move(public_path('images/dashboard/users'), $name);

        /*$file = new FileUpload;
        $file->name = $name;
        $file->save();*/

        $id = Auth::user()->id;

        UserData::where('user_id',$id)->update(['image'=>'images/dashboard/users/'.$name]);

        return Redirect::back()->with('message','Operation Successful !');
    }
}
