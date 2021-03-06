<?php

namespace App\Http\Controllers;

use App\Models\Abonne;
use App\Models\abonnement;
use App\Models\Article;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ab = Abonne::create([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'pays'=>$request->pays,
            'etat'=>$request->etat,
            'societe'=>$request->societe,
            'fonction'=>$request->fonction,
            'departement'=>$request->departement,
            'secteur'=>$request->secteur,
            'contact'=>$request->contact,
            'password'=>$request->password
        ]);

        return redirect()->route('shows', ['id'=>$ab->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $user = Abonne::where('id', $request->id)->first();
        $articles = Article::all();
        $abonnements = abonnement::where('abonne_id', $user->id)->get();
        return view('publication.profile', [
            'user'=>$user,
            'articles'=>$articles,
            'abonnements'=>$abonnements
        ]);
    }

    public function shows(Request $request)
    {
        if($request->session()->exists('subscribe'))
        {
            if($request->session()->get('subscribe') == $request->id){
                $user = Abonne::where('id', $request->id)->first();
                $articles = Article::all();
                $abonnements = abonnement::where('abonne_id', $user->id)->get();
                return view('publication.profile', [
                    'user'=>$user,
                    'articles'=>$articles,
                    'abonnements'=>$abonnements
                ]);
            }
            else {
                return redirect()->route('subscribe')->with('message', 'Session expired, please login');
            }
        }
        else {
            return redirect()->route('subscribe')->with('message', 'Not connect, please login');
        }
    }

    public function abs()
    {
        $user = Auth::user();
        $data = UserData::where('user_id', '=', $user->id)->firstOrFail();
        $users = Abonne::all();
        $articles = Article::all();
        $abonnements = abonnement::all();
        return view('dashboard.publication.abonne', [
            'users'=>$users,
            'articles'=>$articles,
            'abonnements'=>$abonnements,
            'user'=>$user,
            'data'=>$data,
        ]);
    }

    public function updates(Request $request){

        $request->session()->forget('subscribe');

//        abonnement::where('id', $request->id)
//            ->update([
//               'status'=> !$request->status
//            ]);
        return redirect()
            ->route('journal.index')
            ->with('message', 'Log Out Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function login(Request $request){

        $user = Abonne::where('email', $request->email)->first();
        if($user == null){
            return back()
                ->with('message', 'Don\'t have an account, please check information.');
        }
        if($user->password == $request->password)
        {
            if($user->status){
                $request->session()->put('subscribe', $user->id);
                return redirect()->route('shows', ['id'=>$user->id]);
            } else{
                return back()->with('message', 'Your subscribe is not activate');
            }

        } else {
            return back()
                ->with('message', 'Error password');
        }

    }
}
