<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Candidat;
use App\Models\Emploi;
use App\Models\Evenement;
use App\Models\MessagePresident;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{


    public function home(){

        $events = Evenement::orderBy('date', 'desc')->take(9)->get();
        $annual = Evenement::where('typeEvent', 'annual')->first();
        $color = [
            'black',
            'primary',
            'secondary',
            'info',
            'danger',
            'success'
        ];

        return view('welcome', [
            'events' => $events,
            'color' => $color,
            'annual'=>$annual
        ]);
    }

    public function message(Request $request){

        $messages = MessagePresident::where('id', $request->id)->get()->first();

        return view('message', [
            'message' => $messages
            ]
        );
    }

    public function devContinu(){
        return view('dev-continu');
    }

    public function professional(){
        return view('professional');
    }

    public function ethique(){
        return view('ethique');
    }

    public function emplois(){

        $emploi = Emploi::all();

        return view('emplois', [
            'emplois' => $emploi
        ]);
    }

    public function detailEmploi(Request $request){
        $emploi = Emploi::where('id', $request->id)->first();
        return view('detailEmploi', [
            'emploi'=>$emploi
        ]);
    }

    public function addCandidate(Request $request){
        $name = time().'.'.request()->file->getClientOriginalExtension();

        $request->file->move(public_path('documents/cv'), $name);

        Candidat::create(
            [
                'FirstName'=>$request->FirstName,
                'MiddleName'=>$request->MiddleName,
                'LastName'=>$request->LastName,
                'email'=>$request->email,
                'state' =>$request->state,
                'city'=>$request->city,
                'date'=>$request->date,
                'phone'=>$request->phone,
                'img'=>'documents/cv/'.$name,
            ]
        );

        return Redirect::back()->with('message','Candidature envoyé avec succèss.');
    }

    public function pdf(Request $request){
        return view('publication.pdf', [
            'file'=>$request->pdf
        ]);
    }
}
