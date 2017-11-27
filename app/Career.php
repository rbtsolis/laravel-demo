<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model {

    public function studets() {
        return $this -> belongsTo('App\Student', 'id');
    }

    public function courses()
    {
        return $this -> belongsToMany('App\Course');
    }

}
