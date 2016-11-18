<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model {
   protected $fillable = ['nama', 'alamat', 'email', 'phone', 'ktp', 'npwp',
							'tanggal_lahir', 'tempat_lahir_city_id', 'tempat_lahir_province_id',
							'alamat', 'domisili_city_id', 'domisili_province_id', 'pendidikan',
							'jurusan_id', 'tahun_lulus', 'tinggi_badan', 'berat_badan', 'gender', 'skills',
							'agama_id', 'marriage_status_id'];
	
}