<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    protected $fillable = ['title'];
	public function job()
    {
    	return $this->belongsTo(job::class);
    }

    public function questions()
    {
    	return $this->hasMany(question::class);
    }
}
