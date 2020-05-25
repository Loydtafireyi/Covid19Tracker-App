<?php

namespace App;

use App\Province;
use App\User;
use Illuminate\Database\Eloquent\Model;

class RequestAmbulance extends Model
{
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
