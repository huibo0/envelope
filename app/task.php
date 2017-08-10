<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    public function project(){
        //$project->tasks()
        //$task->project()
        return $this->belongsTo('App\project');
    }
}
