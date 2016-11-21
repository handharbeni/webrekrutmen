<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Skill;
use App\Level;
use App\Company;
use App\Propinsi;
use App\Kota;
use App\Kecamatan;
use App\School;
use App\Major;
use App\Position;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
}
