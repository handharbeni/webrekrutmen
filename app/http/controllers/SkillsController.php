<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Skill;

class SkillsController extends Controller
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
		$skills = Skill::all();
		return $skills;
    }
    public function getByUser($kd_Kota){

    }
    public function create($name){
    	$skills = Skill::firstOrNew(array('name' => $name));
    	$skills->save();
        $return = Skill::where('name', $name)->first();
        echo $return->id;        
    }
    public function delete($kd_kota){

    }
    public function update($kd_kota){

    }
}
