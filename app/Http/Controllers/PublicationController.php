<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Evenement;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = UserData::where('user_id', '=', $user->id)->firstOrFail();
        $articles = Article::orderby('created_at', 'desc')->get();
        return view('dashboard.publication.publication', [
            'user'=>$user,
            'data'=>$data,
            'articles'=>$articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('manuscrit'))
        {
            // Get filename with the extension
            $filenameWithExt = $request->file('manuscrit')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('manuscrit')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('manuscrit')->storeAs('public/docs', $fileNameToStore);
        } else
        {
            $fileNameToStore = 'nodocument.pdf';
        }

        Article::create([
           'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'type'=>$request->type,
            'title'=>$request->title,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'organisation'=>$request->organisation,
            'position'=>$request->position,
            'email'=>$request->email,
            'note'=>$request->note,
            'manuscrit'=>$fileNameToStore
        ]);
        return redirect(route('publication.index'))
            ->with('success', 'Added Article Successfully!!!!');
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
        $article = Article::find($id);

        if(isset($request->manuscrit))
        {
            if($article->manuscrit != 'nodocument.pdf')
            {
                Storage::delete('public/docs/'.$article->manuscrit);
            }
            // Get filename with the extension
            $filenameWithExt = $request->file('manuscrit')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('manuscrit')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('manuscrit')->storeAs('public/docs', $fileNameToStore);
        } else
        {
            $fileNameToStore = $article->manusrit;
        }

        $article::first()->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'type'=>$request->type,
            'title'=>$request->title,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'organisation'=>$request->organisation,
            'position'=>$request->position,
            'email'=>$request->email,
            'note'=>$request->note,
            'manuscrit'=>$fileNameToStore
        ]);
        return redirect(route('publication.index'))
            ->with('success', 'Updated Article Successfully!!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Article::find($id);
        //Delete image from post
        if($posts->manuscrit != 'nodocument.pdf')
        {
            Storage::delete('public/docs/'.$posts->manuscrit);
        }
        $posts->delete();
        return redirect(route('publication.index'))->with('success', 'Deleted Article Successfully!!!!');
    }

    public function publication(){
        $publications = Article::orderby('id', 'desc')->paginate(5);
        $annual = Evenement::where('typeEvent', 'annual')->firstOrFail();
        return view('publication.publication',
        [
            'publications'=>$publications,
            'annual'=>$annual
        ]
        );
    }

    public function subscribe(Request $request){
        $id = $request->id;
        return view('publication.subscribe', ['id'=>$id]);
    }
}
