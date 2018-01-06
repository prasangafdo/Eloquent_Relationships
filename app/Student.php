<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

        //Returning name without any relationships
        public function getName()
        {
            return User::where('id', $this->user_id)->first()->first_name;
        }

}

