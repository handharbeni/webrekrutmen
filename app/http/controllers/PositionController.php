<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use App\Position;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	
    public function __construct()
    {
		//
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$positions	= Position::all();
    }
	public function create($name){
		$positions = Position::firstOrNew(array('name' => $name));
		$positions->save();
		$position = Position:where('name', $name)->first();
		
		echo $position->id;
	}
	
	
	public function update(){
		$id = $request->input('position_id');
		$position = Position::find($id);
		$positionFields = array('name', 'requirements', 'skills');
		
		foreach($positionFields as $field){
			$positions->$field =  $request->input($field);
		}
			$positions->average_salary =  $request->input('salary');
			
		return true;
	}
}
