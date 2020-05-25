<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarantine extends Model
{
    protected $fillable = ['quarantine_centre', 'province_id'];

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
