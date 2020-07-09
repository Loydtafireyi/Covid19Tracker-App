<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recovered extends Model
{
    protected $guarded = [];

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
