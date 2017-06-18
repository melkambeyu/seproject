<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    //

    public function job()
    {
    	return $this->belongsTo(job::class);
    }

    public function applicant()
    {
    	return $this->belongsTo(applicant::class);
    }
}
