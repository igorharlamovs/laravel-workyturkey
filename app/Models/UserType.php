<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    //Default timestamps
    public $timestamps = true;
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
