<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('journal.author');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(Cookie::get('author') != null){
            dd('deja connecté');
        }
        return view('journal.loginAuthor');
    }

    public function login(Request $request){
        $author = Author::all();
        foreach($author as $auth){
            if($auth->email == $request->email){
                if($auth->password == $request->password){
                    Cookie::queue('author', $auth->id, 86400);
                    return redirect('authorProfile');
                } else {
                    return back()->with('message','Password Error,
check your password. If you wrong your password, contact an administrator');
                }
            } else {
                return back()->with('message', 'Check your email, if No account, please register');
            }
        }
    }

    public function authorProfile(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $name = time().'.'.request()->image->getClientOriginalExtension();
        $request->image->move(public_path('images/author'), $name);

        Author::create(
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
                'image'=>$name,
                'password'=>$password
            ]
        );

        return redirect('journal')->with('message', 'Successfully, Your request as send');
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
