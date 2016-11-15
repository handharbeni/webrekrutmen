<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model {
   //
   
    public function skill()
    {
        return $this->belongsTo('App\Skill');
    }
    public function level()
    {
        return $this->belongsTo('App\Level');
    }
}