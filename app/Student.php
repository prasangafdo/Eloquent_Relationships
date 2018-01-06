<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
       /* public function getuser()
        {
           // return User::where('id', $this->user_id)->first()->first_name;
           //Returning name without any relationships
           //Returns only first name

           //With eloquent relationships
           return $this->belongsTo('App\User');
        }*/

        public function user()
    {
        return $this->belongsTo('App\User');
    }

}

