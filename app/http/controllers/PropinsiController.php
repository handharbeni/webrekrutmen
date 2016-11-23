<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Propinsi;

class PropinsiController extends Controller
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
		$propinsi = Propinsi::all();
		return $propinsi;
    }
    public function getByUser($kd_propinsi){

    }
    public function create($name){
    	$propinsi = Propinsi::firstOrNew(array('name' => $name));
    	$propinsi->save();
        $return = Propinsi::where('name', $kota)->first();
        echo $return->id;

    }
    public function delete($kd_propinsi){

    }
    public function update($kd_propinsi){

    }
}
