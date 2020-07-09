<?php

namespace App;

use App\Province;
use Illuminate\Database\Eloquent\Model;

class Infection extends Model
{
	protected $fillable = ['province_id', 'date_reported', 'infections'];


    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
