<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

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
        session::put('page','dashboard');
        $userCount = DB::table('customers')->count();
        return view('home', compact('userCount'));
    }
}
