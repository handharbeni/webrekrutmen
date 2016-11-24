<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Major;

class JurusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
		$jurusan = Major::all();
		return $jurusan;
    }
    public function getByUser($kd_Kota){

    }
    public function create($name){
    	$jurusan = Major::firstOrNew(array('name' => $name));
    	$jurusan->save();
        $return = Major::where('name', $name)->first();
        echo $return->id;        
    }
    public function delete($kd_kota){

    }
    public function update($kd_kota){

    }
}
