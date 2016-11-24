<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Company extends Model {
   //
	protected $table_name = 'companies';
	protected $fillable = ['name', 'description', 'email', 'phone', 'role_id','contact_person', 'created_at', 'updated_at'];
	
    public function jobopening()
    {
        return $this->hasMany('App\Models\JobOpening');
    }
}