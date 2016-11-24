<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Company extends Model {
   //
	protected $table_name = 'companies';
	protected $fillable = ['name'];
	
    public function jobopening()
    {
        return $this->hasMany('App\Models\JobOpening');
    }
}