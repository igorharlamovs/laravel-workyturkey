<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    //Default timestamps
    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Eloquent mutator, whenever a certain field is set, i want to first pipe it through this function
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class, "user_type_id");
    }

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }

    public function workout_plans()
    {
        return $this->hasMany(WorkoutPlan::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function message_threads()
    {
        return $this->hasMany(MessageThread::class);
    }
}
