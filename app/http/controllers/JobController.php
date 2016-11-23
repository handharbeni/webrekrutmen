<?php

namespace App\Http\Controllers;

use App\JobOpening;
use App\Company;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
		$jobs		= JobOpening::all();
		$companies	= Company::skip(0)->limit(10)->get();
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
	
    public function company($id)
    {
        $jobs		= JobOpening::where('company_id', $id)
					  ->orderBy('valid_until', 'desc')->get();
		$companies	= Company::skip(0)->limit(10)->get();
    	return view('job.index', compact('jobs','companies'));
    }

}
