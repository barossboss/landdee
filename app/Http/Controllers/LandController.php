<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class LandController extends Controller
{


	public function __construct()
    {
         $this->middleware('auth');
    }
    
    public function post(Request $request){
        
        $land = \App\Land::create($request->all());
        return $land;
    }

    public function index(){
        
        $lands =\App\Land::orderBy('land_id')->get();
        return $lands; // laravel will convert the object into json and return
    }

    public function init(){
        return view('additem');
    }

    public function save(Request $request){
        //$request = $req->input('data');

        $this->post($request);
        return redirect('/');
    }
}