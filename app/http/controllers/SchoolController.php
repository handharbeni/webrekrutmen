<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\School;

class SchoolController extends Controller
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
    public function index(){
		$schools = School::all();
		return $schools;
    }
    public function getByUser($kd_schools){

    }
    public function create($name){
    	$schools = School::firstOrNew(array('name' => $name));
    	$schools->save();
        $return = School::where('name', $name)->first();
        echo $return->id;
    }
    public function delete($kd_schools){

    }
    public function update($kd_schools){

    }
}
