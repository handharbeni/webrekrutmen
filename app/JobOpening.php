<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model {
   //
	
    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}