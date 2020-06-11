<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorType extends Model
{
    protected $fillable = ['type'];

    public function donornames()
    {
    	return $this->hasMany(DonorName::class);
    }
}
