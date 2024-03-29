<?php

namespace App\Http\Controllers;

use App\Models\Advisory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
class AdvisoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $advisories = Advisory::orderBy('created_at', 'desc')->paginate(4);
        // return view('advisory.index', compact('advisories'));

        $query = $request->input('query');

        $query = $request->input('search');
        $advisories = Advisory::orderBy('created_at', 'desc')
                            ->when($query, function($q) use ($query) {
                                return $q->where('place', 'like', '%'.$query.'%')
                                         ->orWhere('info', 'like', '%'.$query.'%')
                                         ->orWhere('dateTime', 'like', '%'.$query.'%');
                            })
                            ->paginate(10);
    
        return view('advisory.index', compact('advisories', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advisories = Advisory::all();
        return view('advisory.create',compact('advisories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'place' => 'required',
            'info' => 'required',
            'dateTime' => 'required'
        ]);
        $advisories = new Advisory();
        $advisories->place = $request->place;
        $advisories->info = $request->info;
        $advisories->dateTime = $request->dateTime;
        
        $advisories->save();
        Alert::toast('Created Successfully', 'success')->autoClose(3000)->timerProgressBar()->width('20rem')->padding('1.5rem');
        return redirect()->route('advisory.index');
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
        $advisory = Advisory::find($id);
        return view('advisory.edit',compact('advisory'));
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
        $this->validate($request,[
            'place' => 'required',
            'info' => 'required',
            'dateTime' => 'required'
        ]);

        $advisory = Advisory::find($id);
        $advisory->place = $request->place;
        $advisory->info = $request->info;
        $advisory->dateTime = $request->dateTime;
       
        $advisory->save();
        Alert::toast('Updated Successfully', 'success')->autoClose(3000)->timerProgressBar()->width('20rem')->padding('1.5rem');
        return redirect()->route('advisory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advisory = Advisory::find($id);
        $advisory->delete();

        Alert::toast('Deleted Successfully', 'success')->autoClose(3000)->timerProgressBar()->width('20rem')->padding('1.5rem');
        return redirect()->back();
    }
}
