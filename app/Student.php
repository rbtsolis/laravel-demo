<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    public function career() {
        return $this -> hasOne('App\Career', 'id');
    }

    public function user_type()
    {
        return $this -> belongsTo('App\UserType');
    }
}
