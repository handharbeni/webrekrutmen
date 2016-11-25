<?php

namespace App;
use Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
    public function getAuthIdentifier() {
        return $this->getKey();
     }
    public function getAuthPassword() {
        return $this->password;
    }
	
	public function store(){
		$role		= Role::where('name','=','employer')->first();
		
		$daftar = new User;
		$daftar->name	= Request::input('name');
		$daftar->email	= Request::input('email');
		$daftar->password	= Hash::make(Request::input('password'));
		$daftar->role_id	= $role->id;
		
		$daftar->save();
		return true;
	}
	
    public static function role($id){
        return DB::table('users')
					->join('roles', 'users.role_id', '=', 'roles.id')
                    ->where('users.id', '=', $id)
                    ->get();
    }
}
