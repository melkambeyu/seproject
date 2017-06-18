<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    //
    public function company()
    {
    	return $this->belongsTo(company::class);
    }

    public function quiz()
    {
    	return $this->hasOne(quiz::class);
    }
}

