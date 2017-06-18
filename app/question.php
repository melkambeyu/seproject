<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    //

    public function quiz()
    {
    	$return $this->belongsTo(quiz::class);
    }
}
