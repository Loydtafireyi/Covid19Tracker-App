<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['province_id', 'tests', 'tests_date'];

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
