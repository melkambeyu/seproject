<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    //
    protected $fillable = ['name','salary','vacant','description'];
    
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
    public function applicants()
    {
       return $this->belongsToMany('App\applicant','applications');
    }
    public function hasApplied($id)
    {
        foreach($this->applicants as $person){
            if($person->id === $id){
                return true;
             }
        }
                return false;
    }
     public function grades()
    {
        return $this->hasManyThrough('App\exam', 'App\job');
    }
    public function notifications()
    {
        return $this->hasMany(notification::class);
    }
}



