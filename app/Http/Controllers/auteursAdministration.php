<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class auteursAdministration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auteurs = Author::all();
        return view('dashboard.publication.auteurs', [
            'auteurs' =>$auteurs
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
            Author::where('id', $request->name)
                ->update([
                    'status'=>!$request->statut
                ]);
            return back()->with('message', 'Statut changé');
        } else {
            $author = Author::where('id', $request->name)->first();

            if($request->image != null){
                $name = time().'.'.request()->image->getClientOriginalExtension();
                $request->image->move(public_path('images/author'), $name);
                Author::where('id', $request->name)->update(
                    [
                        'image'=>'images/author/'.$name,
                    ]
                );
            }

            Author::where('id', $request->name)->update(
                [
                    'firstName'=>$request->firstName,
                    'lastName'=>$request->lastName,
                    'middleName'=>$request->middleName,
                    'email'=>$request->email,
                    'country'=>$request->country,
                    'city'=>$request->city,
                    'date'=>$request->date,
                    'state'=>$request->state,
                    'companyName'=>$request->companyName,
                    'department'=>$request->department,
                    'position'=>$request->position,
                    'password'=>$request->new_password
                ]
            );

            return back()->with('message', 'Successfully, profile as update');
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
        Author::where('id', $id)->delete();
        return back()->with('message', 'Othor deleted');
    }
}
