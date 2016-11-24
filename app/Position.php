<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Position extends Model {
   //
   
	protected $fillable = ['name', 'requirements', 'skills', 'average_salary', 'created_at', 'updated_at'];
}