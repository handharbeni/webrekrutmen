<?php

namespace App\Http\Controllers;

use App\JobOpening;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index() {
		$jobs		= JobOpening::all();
		//$companies		= Company::skip(0)->limit(10)->get();
		$companies		= $this->topcompany();
    	return view('job.index', compact('jobs','companies'));
    }
	
	public function create()
	{
	  //
	}
	
	public function store()
	{
	  //
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
