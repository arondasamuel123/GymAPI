<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session92448 extends Model
{
   protected $fillable = [
        'location', 'date', 'reps', 'sets','exercise_type'
    ];

     public function user(){
    	return $this->belongsTo(User_92448::class);

    }


}
