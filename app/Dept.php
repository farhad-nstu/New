<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Test;

class Dept extends Model
{
    public function tests(){
    	return $this->hasMany(Test::class);
    }
}
