<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dept;

class Test extends Model
{
    public function dept()
    {
    	return $this->belongsTo(Dept::class);
    }
}
