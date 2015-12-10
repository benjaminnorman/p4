<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function batch(){
        //Recipe can have many batches
        return $this->hasMany('\p4\Batch');
    }


}
