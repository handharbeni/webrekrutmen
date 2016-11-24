<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends  Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
		if(Auth::user()->role_id != NULL){
			$user_role = Role::find(Auth::user()->role_id);
			if($user_role->name == "employee"){
				return view('dashboard.index');
			}else{
				return view('dashboard.company');
			}
		}
		return view('dashboard.index');
    }
}
