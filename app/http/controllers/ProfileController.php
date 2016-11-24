<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Candidate;
use App\CandidateHistory;
use App\Skill;
use App\Level;
use App\Religion;
use App\MarriageStatus;
use App\City;
use App\Company;
use App\Propinsi;
use App\Kota;
use App\Kecamatan;
use App\School;
use App\Major;
use App\Position;

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
        $propinsi	= Propinsi::all();
		$skills		= Skill::all();
		$levels		= Level::all();
		$statuses	= MarriageStatus::all();
		$religions	= Religion::all();
		$schools	= School::all();
		$companies	= Company::all();
		$majors		= Major::all();
		$positions	= Position::all();
		$profil		= DB::table('candidates')->where('user_id',Auth::user()->id)->first();
		$history	= DB::table('candidate_histories')->where('candidate_id',Auth::user()->id)->first();
		
		return view('profil.index', compact('skills','levels','propinsi','statuses','religions','schools','companies','majors','profil', 'history','positions'));
    }
	public function update(){
		$propinsi	= Propinsi::all();
		$skills		= Skill::all();
		$levels		= Level::all();
		$statuses	= MarriageStatus::all();
		$religions	= Religion::all();
		$schools	= School::all();
		$companies	= Company::all();
		$majors		= Major::all();
		$positions	= Position::all();
		$profil		= DB::table('candidates')->where('user_id',Auth::user()->id)->first();
		$history	= DB::table('candidate_histories')->where('candidate_id',Auth::user()->id)->first();
		
		return view('profil.index', compact('skills','levels','propinsi','statuses','religions','schools','companies','majors','profil', 'history','positions'));
	}
	public function cobaAge(){
		echo date('Y') - '1993';
	}
	public function view($profileId){
		
	}
	
    public function store(Request $request){
		$candidate	= Candidate::firstOrNew(array('user_id' => $request->input('user_id')));
		
		$candidatefields = array('name', 'alamat', 'email', 'phone', 'KTP', 'npwp',
											'tanggal_lahir', 'tempat_lahir_city_id', 'tempat_lahir_province_id',
											'alamat', 'domisili_city_id', 'domisili_province_id', 'pendidikan',
											'jurusan_id', 'tahun_lulus', 'tinggi_badan', 'berat_badan', 'gender', 'skills',
											'agama_id', 'marriage_status_id', 'membership_type');
		
		foreach($candidatefields as $field){
			$candidate->$field =  $request->input($field);
		}
		$candidate->sekolah_id = $request->input('sekolah_id') == NULL ? 0 : $request->input('sekolah_id');
		// var_dump(substr($request->input('tanggal_lahir'), 0, 4));
		$candidate->age = date('Y') - substr($request->input('tanggal_lahir'), 0, 4);
		
		if($request->input('skills') == NULL)
			$candidate->skills = implode(',',$request->input('skills'));
		else
			$candidate->skills = "";
		
		/** $candidate->data = $request->only('name', 'alamat', 'email', 'phone', 'ktp', 'npwp',
											'tanggal_lahir', 'tempat_lahir_city_id', 'tempat_lahir_province_id',
											'alamat', 'domisili_city_id', 'domisili_province_id', 'pendidikan',
											'jurusan_id', 'tahun_lulus', 'tinggi_badan', 'berat_badan', 'gender', 'skills',
											'agama_id', 'marriage_status_id', 'membership_type')
		*/
		
		$candidate->save();
		
		/**
		$history		= CandidateHistory::firstOrNew(array('candidate_id' => $request->input('user_id')));
		$historyfields	= array('user_id', 'position_id', 'from', 'until');
		
		foreach($historyfields as $field){
			$history->$field = $request->input($field);
		
		
		$history->save();
		*/
		return redirect()->action('ProfileController@index');
    }
	
    public function getIndex() {
        $propinsi = array('' => '');
        foreach(Propinsi::all() as $row)
            $propinsi[$row->id] = $row->propinsi;
         
        return View::make('index', array(
            'propinsi' => $propinsi
        ));
    }
    public function savePropinsi($propinsi){
    	$propinsi	= Propinsi::firstOrNew(array('name' => $propinsi));
    	$propinsi->save();
    }
    public function saveKabupaten($kota){
    	$kota = Kota::firstOrNew(array('name' => $kota));
    	$kota->save();
    }

    public function getData($type, $id) {
        switch($type):
            case 'kabupatens':
                $return = '<option value="0">Kabupaten/Kota</option>';
                foreach(Kota::where('province_id', $id)->get() as $row) 
                    $return .= "<option value='$row->id'>$row->name</option>";
                return $return;
            break;
            case 'cities':
                $return = '<option value="0">Kecamatan</option>';
                foreach(Kecamatan::where('kabupaten_id', $id)->get() as $row) 
                    $return .= "<option value='$row->id'>$row->name</option>";
                return $return;
            break;
        endswitch;    
    }    
}
