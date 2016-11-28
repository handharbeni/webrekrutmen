<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Skill;
use App\Level;
use App\Company;
use App\Propinsi;
use App\Kota;
use App\Kecamatan;
use App\School;
use App\Major;
use App\Role;
use App\Position;
use App\User;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	
    public function __construct()
    {
		//
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$companies	= Company::orderBy('name','ASC')->get();
    	return view('company.index', compact('companies'));
    }
	
    public function view()
    {
		if(!Auth::check())
			return redirect('login');
		
		$company_data	= Company::where('email',Auth::user()->email)->first();
    	return view('company.profil', compact('company_data'));
    }
	
    public function update()
    {
		if(!Auth::check())
			return redirect('login');
		
		$company	= Company::find(Request::input('id'));
		
		$company->name			= Request::input('name');
		$company->description	= Request::input('description');
		$company->contact_person	= Request::input('contact_person');
		$company->email		= Request::input('email');
		$company->phone		= Request::input('phone');
		
		$company->save();
		
		return redirect('company-profile')->with('status', 'Profil Perusahaan Diupdate!');
    }
	
    public function register()
    {
    	return view('company.register');
    }
	
    public function store()
    {
		$data 		= Request::only('name', 'description', 'phone', 'email', 'contact_person');
		
		// get role with 'employer' name and push it to datafield
    	$newLogin	= new User;
		$newLogin->store();
		
    	$newCompany = new Company($data);
		$newCompany->save();
		
		return redirect('login');
    }
}
