<?php

namespace App\Http\Controllers;

use App\Models\Collective;
use App\Models\Individual;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function home(){
        return view('membre.membre');
    }

    public function individual(){
        return view('membre.individual');
    }

    public function add_individual(Request $request){
        $name = time().'.'.request()->file->getClientOriginalExtension();
        $request->file->move(public_path('images/membres/individuals'), $name);

        Individual::create([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'date'=>$request->date,
            'country'=>$request->country,
            'city'=>$request->city,
            'state'=>$request->state,
            'companyName'=>$request->companyName,
            'position'=>$request->position,
            'industry'=>$request->industry,
            'phone'=>$request->phone,
            'file'=>$name,
            'amount'=>$request->amount,
            'registrantType'=>$request->registrantType
        ]);
        return redirect('membre')
            ->with('message', 'Adhésion effectuée avec succèss');
    }

    public function collective(){
        return view('membre.collective');
    }

    public function add_collective(Request $request){

        $name = time().'.'.request()->file->getClientOriginalExtension();
        $request->file->move(public_path('images/membres/logo'), $name);
        Collective::create([
            'name'=>$request->name,
            'reg-no'=>$request->regno,
            'industry'=>$request->industry,
            'country'=>$request->country,
            'position'=>$request->position,
            'city'=>$request->city,
            'province'=>$request->province,
            'website'=>$request->website,
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'job-title'=>$request->jobtitle,
            'representatives'=>$request->representatives,
            'logo'=>'images/membres/logo/'.$name,
            'fFirstName'=>$request->fFirstName,
            'fLastName'=>$request->fLastName,
            'fEmail'=>$request->fEmail,
            'fPhone'=>$request->fPhone,
            'fJob-title'=>$request->fJobtitle,
            'fullname'=>$request->fullname,
            'positions'=>$request->positions
        ]);
        return redirect ('membre')
            ->with('message', 'Adhésion effectuée avec succèss');
    }
}
