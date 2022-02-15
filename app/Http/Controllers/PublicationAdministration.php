<?php

namespace App\Http\Controllers;

use App\Models\Abonne;
use App\Models\abonnement;
use App\Models\Article;
use Illuminate\Http\Request;

class PublicationAdministration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abonnements = abonnement::all();
        $articles = Article::where('status', 1)->get();
        $abonnes = Abonne::all();
        return view('dashboard.membres.abonnement', [
           'abonnements'=>$abonnements,
           'articles'=>$articles,
           'abonnes'=>$abonnes
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        abonnement::where('id', $request->name)
            ->update([
                'status'=>!$request->status
            ]);
        return back()->with('message', 'Statut changé');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
