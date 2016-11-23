<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Kota;

class KotaController extends Controller
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
		$kota = Kota::all();
		return $kota;
    }
    public function getByUser($kd_Kota){

    }
    public function create($name){
    	$kota = Kota::firstOrNew(array('name' => $name));
    	$kota->save();
        $return = Kota::where('name', $kota)->first();
        echo $return->id;        
    }
    public function delete($kd_kota){

    }
    public function update($kd_kota){

    }
}
