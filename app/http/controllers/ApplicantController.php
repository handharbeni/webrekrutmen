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
use App\School;
use App\Major;
use App\Position;

use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
		$applicants		= Applicant::all();
    }
	
	public function store(Request $request)
	{
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

	public function search(Request $request){
		$keyword	= $request->input('keyword');
	}
	
	public function view($id){
		
		/*$applicant_data	= DB::table('applicants')
							->join('applicant_statuses', 'applicants.applicant_status_id', '=', 'applicant_statuses.id')
							->join('candidates', 'applicants.candidate_id', '=', 'candidates.id')
							->join('candidate_histories', 'applicants.candidate_id', '=', 'candidate_histories.candidate_id')
							->join('job_openings', 'applicants.job_opening_id', '=', 'job_openings.id')
							->join('companies', 'job_openings.company_id', '=', 'companies.id')
							->join('positions', 'job_openings.position_id', '=', 'positions.id')
							->join('religions', 'candidates.religion_id', '=', 'religion.id')
							->join('schools', 'candidates.school_id', '=', 'school.id')
							->where('companies.email',Auth::user()->email)
							->select('applicants.*', 'applicant_statuses.*', 'job_openings.*', 'companies.*' , 'positions.*')
							->get();
		*/
		$applicant_data = Applicant::find($id)->get();
		return view('applicant.detail', compact('applicant_data'));
	}
	
    public function applicantByCompany()
    {
		$applicants	= DB::table('applicants')
							->join('applicant_statuses', 'applicants.applicant_status_id', '=', 'applicant_statuses.id')
							->join('job_openings', 'applicants.job_opening_id', '=', 'job_openings.id')
							->join('companies', 'job_openings.company_id', '=', 'companies.id')
							->join('positions', 'job_openings.position_id', '=', 'positions.id')
							->where('companies.email',Auth::user()->email)
							->select('applicants.*', 'applicant_statuses.*', 'job_openings.*', 'companies.*' , 'positions.*')
							->get();
		return view('applicant.index', compact('applicants'));
    }

}
