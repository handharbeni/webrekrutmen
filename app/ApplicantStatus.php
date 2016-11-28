<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {
   //
	protected $fillable = ['candidate_id', 'job_opening_id', 'applicant_status_id', 'sms_id'];
    protected $table_name = ['name', 'open'];
	
}