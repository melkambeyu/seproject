<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    //
    protected $fillable = ['applicant_id', 'job_id'];

    public function job()
    {
    	return $this->belongsto(job::class);
    }
}
