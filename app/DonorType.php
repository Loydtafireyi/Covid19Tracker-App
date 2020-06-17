<?php

namespace App;

use App\DonorName;
use Illuminate\Database\Eloquent\Model;

class DonorType extends Model
{
    protected $fillable = ['type'];

    public function donor_names()
    {
    	return $this->hasMany(DonorName::class);
    }
}
