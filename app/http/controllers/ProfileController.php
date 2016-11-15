<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Level;
use App\City;
use App\Province;
use App\Company;
use App\Propinsi;
use App\Kota;
use App\Kecamatan;
use App\Desa;
	
class ProfileController extends Controller
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
        $propinsi = Propinsi::all();
		$skills	= Skill::all();
		$levels	= Level::all();
        return view('profil.index', compact('skills','levels','propinsi'));
    }
	
    public function view($id)
    {
        return view('profil.profil');
    }
    public function getIndex() {
        $propinsi = array('' => '');
        foreach(Propinsi::all() as $row)
            $propinsi[$row->id] = $row->propinsi;
         
        return View::make('index', array(
            'propinsi' => $propinsi
        ));
    }
    public function saveData(){

    }
    public function getData($type, $id) {
        switch($type):
            case 'kabupatens':
                $return = '<option value="0">PILIH KABUPATEN</option>';
                foreach(Kota::where('province_id', $id)->get() as $row) 
                    $return .= "<option value='$row->id'>$row->name</option>";
                return $return;
            break;
            case 'cities':
                $return = '<option value="0">PILIH KECAMATAN</option>';
                foreach(Kecamatan::where('kabupaten_id', $id)->get() as $row) 
                    $return .= "<option value='$row->id'>$row->name</option>";
                return $return;
            break;
        endswitch;    
    }    
}
