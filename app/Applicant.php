<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {
   //
	protected $fillable =['candidate_id', 'job_opening_id', 'applicant_status_id', 'sms_id'];
   
    public function jobOpening()
    {
        return $this->belongsTo('App\JobOpening');
    }

    public function candidate()
    {
        return $this->belongsTo('App\Candidate');
    }
	
    public function status()
    {
        return $this->belongsTo('App\ApplicantStatus');
    }
}