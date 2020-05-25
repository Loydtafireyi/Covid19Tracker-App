<?php

namespace App;

use App\Province;
use Illuminate\Database\Eloquent\Model;

class Infection extends Model
{
	protected $fillable = ['province_id', 'date_reported', 'infections', 'region_code'];

	protected $dates = [
    'created_at',
    'updated_at',
    'date_reported',
];

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
