<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    //
	protected $fillable = ['question', 'choices', 'right_answer'];

	protected $casts = [
		'choices' => 'array'
	];

    public function exam()
    {
    		return $this->belongsTo(exam::class);
    }
}
