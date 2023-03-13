<?php

namespace App\Http\Controllers;

use App\Models\Advisory;
use App\Models\Interruption;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $advisories = Advisory::get();
        // $interruptions = Interruption::get();

        // return view('site', [

        //     'advisories'               => $advisories,
        //     'interruptions'              => $interruptions,
        
        // ]);

        return view('site');
    }
}
