<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return view('register');
    }
	
    public function store(Request $request)
    {    
		
		$daftar = new User;
		$daftar->name	= $request->input('nama');
		$daftar->email	= $request->input('email');
		$daftar->password	= md5($request->input('password'));
		
		if ($daftar->save())
		{
		  return redirect('login')->with('status', 'Register berhasil! Silakan login!');;
		}else{
		  return redirect('register')->with('status', 'Register gagal!');;
		}
    }
}
?>