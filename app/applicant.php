<?php

namespace App;

use App\Notifications\ApplicantResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Applicant extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName','lastName', 'email', 'password', 'sex'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ApplicantResetPassword($token));
    }
    public function applications()
    {
        return $this->hasMany(application::class);
    }
    public function jobs()
    {
        return $this->belongsToMany('App\job', 'applications');
    }
    public function grades()
    {
        return $this->belongsToMany('App\exam','grades');
    }
}
