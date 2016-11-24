<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
	
	 public function authenticate(Request $request)
    {
		$email		= $request->input('email');
		$password	= $request->input('password');
		
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
			echo "Berhasil Login";
            //return redirect()->intended('home');
        }else if (Auth::validate(array('email' => $email, 'password' => $password)))
		{
			echo "Berhasil login (validate)";
			// wat
		}else{
			echo "Gagal login!";
		}
    }
}
