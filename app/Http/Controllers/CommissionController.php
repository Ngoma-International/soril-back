<?php

namespace App\Http\Controllers;

use App\Models\commission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coms = commission::all();
        return view('dashboard.membres.commission', [
           'coms'=>$coms
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
        $name = time().'.'.request()->file->getClientOriginalExtension();

        $request->file->move(public_path('images/dashboard/commission'), $name);

        commission::create([
            'commissionName'=>$request->commissionName,
            'president'=>$request->president,
            'objectives'=>$request->objectives,
            'overview'=>$request->overview,
            'meetingDay'=>$request->meetingDay,
            'fromm'=>$request->fromm,
            'too'=>$request->too,
            'picture'=>'images/dashboard/commission' . $name
        ]);

        return Redirect::back()
            ->with('message','Commission ajoutée avec succèss');
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
        if($request->file != null){
            $name = time().'.'.request()->file->getClientOriginalExtension();
            $request->file->move(public_path('images/dashboard/commission'), $name);
            commission::where('commissionID', $id)->update([
                'picture'=>'images/dashboard/commission' . $name
            ]);
        }

        if($request->meetingDay != null){
            commission::where('commissionID', $id)->update([
                'meetingDay'=>$request->meetingDay,
            ]);
        }

        commission::where('commissionID', $id)->update([
            'commissionName'=>$request->commissionName,
            'president'=>$request->president,
            'objectives'=>$request->objectives,
            'overview'=>$request->overview,
            'fromm'=>$request->fromm,
            'too'=>$request->too,
        ]);

        return Redirect::back()
            ->with('message','Commission mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        commission::where('commissionID', $id)->delete();
            return Redirect::back()
                ->with('message','Commission supprimés avec succèss');
    }
}
