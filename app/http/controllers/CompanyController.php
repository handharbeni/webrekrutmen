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
		$companies	= Company::all();
    	return view('company.index', compact('companies'));
    }
    public function register()
    {
    	return view('company.register');
    }
    public function store(Request $request)
    {
		$data 		= Request::only('name', 'description', 'phone', 'email', 'contact_person');
    	$newCompany = new Company($data);
		$newCompany->save();
		
		//retrieving input
		$loginData	= array(Request::input('email'), Hash::make(Request::input('password')));
		
		// get role with 'employer' name and push it to datafield
		$role		= Role::where('name','=','employer')->first();
		$roleData	= array('role_id', $role->id);
		array_push($loginData, $roleData);
		
    	$newLogin	= new User($loginData);
		$newLogin->save();

		return redirect('login');
    }
}
