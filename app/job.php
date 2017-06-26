<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    //
    protected $fillable = ['name','descrip'];
    
    public function company()
    {
    	return $this->belongsTo(company::class);
    }

    public function applications()
    {
    	return $this->hasMany(application::class);
    }
    public function exam()
    {
    	return $this->hasOne(exam::class);
    }
}

