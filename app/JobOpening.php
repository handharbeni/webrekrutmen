<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model {
   //
	protected $fillable =['position_id', 'company_id', 'valid_until', 'number_of_openings', 'salary',
									'age_min', 'age_max', 'domisili_city_id', 'gender', 'tinggi_badan', 'berat_badan',
									'pendidikan', 'tahun_lulus', 'marriage_status_id', 'enabled', 'job_opening_status_id'];
   
    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}