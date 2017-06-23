<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    //
	protected $casts = [
		'choices' => 'array'
	];

    public function exam()
    {
    		return $this->belongsTo(exam::class);
    }
}
