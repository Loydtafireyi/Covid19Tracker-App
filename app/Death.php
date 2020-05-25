<?php

namespace App;

use App\Province;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    protected $guarded = [];

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
