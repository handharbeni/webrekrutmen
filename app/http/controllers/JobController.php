<?php

namespace App\Http\Controllers;

use App\JobOpening;
use App\Company;
use App\Candidate;
use App\CandidateHistory;
use App\Skill;
use App\Level;
use App\Religion;
use App\MarriageStatus;
use App\City;
use App\Propinsi;
use App\Kota;
use App\Kecamatan;
use App\Role;
use App\School;
use App\Major;
use App\Position;

use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index() {
		
		$jobs		= JobOpening::all();
		$companies	= $this->topcompany();
		if (Auth::check()){
			if(Auth::user()->role_id != NULL){
				$user_role = Role::find(Auth::user()->role_id);
				// if active login is perusahaan
				if($user_role->name == "employer"){
					return redirect('company-job');
				}else{
					return view('job.index', compact('jobs','companies'));
				}
			}
		}
			return view('job.index', compact('jobs','companies'));		
    }
	
	public function create()
	{
	  	if(Auth::user()->role_id != NULL){
			$user_role = Role::find(Auth::user()->role_id);
			// if active login is perusahaan
			if($user_role->name == "employer"){
				$company_data	= Company::where('email',Auth::user()->email)->first();
				$marriage_statuses = MarriageStatus::all();
				$cities			= Kota::all();
				$positions		= Position::all();
				$skills			= Skill::all();
				return view('job.create', compact('company_data','marriage_statuses','cities', 'positions','skills'));
			}
		}
		return redirect('login');
		
	}
	
	public function store(Request $request)
	{
		$position = new Position();
		$position->update();
		
		$data 		= Request::only('position_id', 'company_id', 'valid_until', 'number_of_openings', 'salary',
									'age_min', 'age_max', 'domisili_city_id', 'gender', 'tinggi_badan', 'berat_badan',
									'pendidikan', 'tahun_lulus', 'marriage_status_id', 'enabled', 'job_opening_status_id');
    	$newJob = new JobOpening($data);
		$newJob->save();
		
		return redirect('/company-job');
	}
		
	public function edit($id)
	{
	  //
	}
	
	public function update($id)
	{
	  //
	}
	
	public function destroy($id)
	{
	  //
	}
	
	public function apply($id){
		$jobs		= JobOpening::find($id)->first();
		$skills		= Skill::all();
		$levels		= Level::all();
		$statuses	= MarriageStatus::all();
		$religions	= Religion::all();
		$schools	= School::all();
		$companies	= Company::all();
		$majors		= Major::all();
		$positions	= Position::all();
		$propinsi	= Propinsi::all();
		$kota		= Kota::all();
		
		if(Auth::check())
			$profil	= Candidate::find(Auth::user()->id)->first();
		
		return view('job.apply',compact('jobs', 'skills', 'levels', 'statuses', 'religions', 'schools', 'companies','majors', 'positions', 'propinsi', 'kota', 'profil'));
	}
	
	public function jobByCompany(){
		// find company id
		$company_data	= Company::where('email',Auth::user()->email)->first();
		if(!$company_data == NULL) {
			$jobs			= JobOpening::where('company_id', $company_data->id)
								->orderBy('valid_until', 'desc')->get();
		}			
		return view('job.company', compact('jobs', 'company_data'));
	}
	public function search(Request $request){
		$keyword	= $request->input('keyword');
		$filter		= $request->input('filter-hari');
		$jobs		= DB::table('job_openings')
						->join('companies', 'job_openings.company_id', '=', 'companies.id')
						->join('positions', 'job_openings.position_id', '=', 'positions.id')
						->select(DB::raw('companies.name as company_name, positions.name as position_name, job_openings.*'))
						->whereRaw('companies.name like "%'.$keyword.'%"')
						->orWhereRaw('positions.name like "%'.$keyword.'%"')
						->whereRaw('job_openings.created_at > subdate(current_date, '.$filter.')')
						->get();
		$companies		= $this->topcompany();
    	return view('job.search', compact('jobs','companies','keyword','filter'));
	}
	
    public function company($id)
    {
        $jobs			= JobOpening::where('company_id', $id)
							->orderBy('valid_until', 'desc')->get();
		$company_data 	= Company::where('id', $id)->first();
		//$companies		= Company::skip(0)->limit(10)->get();
		$companies		= $this->topcompany();
    	return view('job.index', compact('jobs','companies', 'company_data'));
    }

	public function topcompany(){
		$tops = DB::table('job_openings')
					 ->join('companies', 'job_openings.company_id', '=', 'companies.id')
                     ->select(DB::raw('COUNT(job_openings.id) AS jumlah_loker, companies.*, job_openings.*'))
					 ->orderBy('jumlah_loker','desc')
                     ->groupBy('job_openings.company_id')
					 ->limit(10)
                     ->get();
		return ($tops);
	}
}
