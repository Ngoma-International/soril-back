<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->exists('author') != null){
            $id = $request->session()->get('author');
            $author = Author::where('id', $id)->first();
            return view('journal.author', [
                'author'=>$author
            ]);
        } else {
            return view('journal.author');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->session()->exists('author')){
            return redirect('authorProfile');
        }
        return view('journal.loginAuthor');
    }

    public function login(Request $request){
        $author = Author::all();
        foreach($author as $auth){
            if($auth->email == $request->email){
                if($auth->password == $request->password){
                    $request->session()->put('author', $auth->id);
                    return redirect('authorProfile');
                } else {
                    return back()->with('message','Password Error, check your password. If you wrong your password, contact an administrator');
                }
            } else {
                return back()->with('message', 'Check your email, if No account, please register');
            }
        }
    }

    public function profile(Request $request){

        if($request->session()->exists('author'))
        {
            $author = Author::where('id', $request->session()->get('author'))->first();
            return view('journal.authorProfile', [
                'author'=>$author
            ]);
        }
        else {
            return redirect('authorLogin');
        }
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
                'image'=>'images/author/'.$name,
                'password'=>$request->password
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
        $author = Author::where('id', $id)->first();

        if($request->password != $author->password){
            return back()->with('message', 'Your old password is not correctly');
        };

        if($request->image != null){
            $name = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images/author'), $name);
            Author::where('id', $id)->update(
                [
                    'image'=>'images/author/'.$name,
                ]
            );
        }

        Author::where('id', $id)->update(
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

        return redirect('authorProfile')->with('message', 'Successfully, Your profile as update');
    }

    public function log_out_author(Request $request){
        $value = $request->session()->pull('author', 'default');
        return redirect('journal')->with('message', 'log out successfully');
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
