<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'workout_location', 'age', 'gender', 'weight','t_weight'
    ];


    public function user(){
    	return $this->belongsTo(User_92448::class);

    }
    
}
