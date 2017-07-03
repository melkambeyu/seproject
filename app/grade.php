<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
 	protected $fillable = ['exam_id', 'applicant_id', 'correct', 'number'];

 public function applicant()
 {
 	return $this->belongsTo(applicant::class);
 }
 public function job()
 {
 	return $this->belongsTo(job::class);
 }
}
