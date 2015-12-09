<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    //
    public function recipe(){
        return $this->belongsTo('\p4\Recipe');
    }
}
