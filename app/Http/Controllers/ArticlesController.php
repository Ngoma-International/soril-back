<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->exists('author')){
            return view('journal.submitArticle');
        }
        return view('journal.loginAuthor');
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

        if($request->session()->exists('author'))
        {
            $name = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('docs/articles'), $name);

            Article::create(
                [
                    'type'=>$request->type,
                    'title'=>$request->title,
                    'author_id'=>$request->session()->get('author'),
                    'status'=>0,
                    'note'=>$request->note,
                    'manuscrit'=>'docs/articles'.$name
                ],
            );
            return redirect('journal')->with('message', 'Successfully, Your request as send');
        } else {
            return redirect('journal')->with('message', 'Error, Your request as not send, please login');
        }
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
        //
    }
}
