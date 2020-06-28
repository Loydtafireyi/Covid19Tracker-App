<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelfPositive extends Model
{
    protected $guarded = [];

    public function province()
    {
    	return $this->belongsTo(Province::class);

    }
}
