<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function user(){
        //$project->user()
        return $this->belongsTo('App\User');
    }
    public function tasks(){
        //$project->user()
        return $this->hasMany('App\task');
    }
}
