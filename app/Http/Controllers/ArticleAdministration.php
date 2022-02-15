<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleAdministration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $art = Article::all();
        return view ('dashboard.membres.articles', [
           'membres'=>$art
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
        if($id == 0){
            Article::where('id', $request->name)
                ->update([
                    'status'=>!$request->statut
                ]);
            return back()->with('message', 'Statut changé');
        } else {
            if($request->image != null){
                $name = time().'.'.request()->image->getClientOriginalExtension();
                $request->image->move(public_path('docs/articles'), $name);

                Article::where('id', $request->name)->update(
                    [
                        'manuscrit'=>'docs/articles'.$name
                    ],
                );
            }

            Article::where('id', $request->name)->update(
                [
                    'type'=>$request->type,
                    'title'=>$request->title,
                    'note'=>$request->note,
                ],
            );
            return back()->with('message', 'Articles Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::where('id', $id)->delete();
        return back()->with('message', 'Article supprimée');
    }
}
