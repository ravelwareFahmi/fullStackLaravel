<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    //

    protected $table = ['handphones'];
    protected $guard = [];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

}
