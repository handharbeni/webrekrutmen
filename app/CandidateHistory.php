<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class CandidateHistory extends Model {
   //
   protected $table_name = 'candidate_histories';
   protected $fillable = ['candidate_id', 'position_id', 'from', 'until'];
}