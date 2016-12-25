<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$sponsors = Sponsor::all();
        return view('home',['sponsors'=>$sponsors]);
    }
	public function add()
	{
		return view('addsponsor');
	}
    public function insert(Request $request)
    {
        $sponsor = new Sponsor;
        $sponsor->name = $request->name;
        $sponsor->zipcode = $request->zip;
        $sponsor->city = $request->city;
        $sponsor->state = $request->state;
        $sponsor->address = $request->address;
        $sponsor->save();

        return redirect()->action('HomeController@index');
        
        
    }
}
