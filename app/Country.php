<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['country'];

    public function donornames()
    {
    	return $this->hasMany(DonorName::class);
    }

    public function provinces()
    {
    	return $this->hasMany(Province::class);
    }
}
