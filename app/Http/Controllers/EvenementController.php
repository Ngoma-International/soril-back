<?php

namespace App\Http\Controllers;

use App\Models\Animateur;
use App\Models\Evenement;
use App\Models\EventProgramme;
use App\Models\EventRegister;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    //
    public function home(){

        $events = Evenement::orderBy('date', 'desc')->take(9)->get();
        $annual = Evenement::where('typeEvent', 'annual')->firstOrFail();
        $color = [
            'black',
            'primary',
            'secondary',
            'info',
            'danger',
            'success'
        ];

        return view('evenement.home', [
            'events'=>$events,
            'annual'=>$annual,
            'color'=>$color
        ]);
    }

    public function detail(Request $request)
    {
        $events = Evenement::where('id', $request->id)->get()->first();
        $anim = Animateur::where('id', $events->animateur)->get()->first();
        $anims = Animateur::all();
        $program = EventProgramme::where('evenement_id', $events->id)->orderBy('id', 'desc')->get();
        return view('evenement.detail', [
            'event'=>$events,
            'anim'=>$anim,
            'programs'=>$program,
            'anims'=>$anims
        ]);
    }

    public function regEvent(Request $request){
        $id = $request->id;
        return view ('evenement.register', [
            'id'=>$id
        ]);
    }

    public function regEventPost(Request $request){
        EventRegister::create([
            'title'=>$request->title,
            'name'=>$request->firstName . ' ' . $request->lastName . ' ' . $request->middleName,
            'evenement_id'=>$request->id,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'province'=>$request->province,
            'pays'=>$request->pays,
            'company'=>$request->company,
            'departement'=>$request->departement,
            'position'=>$request->position,
            'industrie'=>$request->industrie,
            'phoneBureau'=>$request->phoneBureau,
            'status'=>false,
            'ref'=>''
        ]);
        return redirect('event_details?id='.$request->id)
            ->with(['success'=>'Votre enregistrement a réussi']);
    }

    public function conference($id){
        $annual = Evenement::where('id', $id)->firstOrFail();
        $anim = Animateur::where('id', $annual->animateur)->get()->first();
        $anims = Animateur::all();
        $program = EventProgramme::where('evenement_id', $annual->id)->orderBy('id', 'desc')->get();
        return view('evenement.conference',
        [
            'annual'=>$annual,
            'anim'=>$anim,
            'programs'=>$program,
            'anims'=>$anims
        ]
        );
    }
}
