<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function show()
    {
        if (Auth::check()) 
            return Redirect::route('home');
	
        return view('login');
    }

    public function do()
    {
        // do login
    }
	
	 public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('home');
        }
    }
}
?>