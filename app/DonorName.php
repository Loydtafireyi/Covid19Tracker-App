<?php

namespace App;

use App\Country;
use App\Pledge;
use App\Recieved;
use App\DonorType;
use Illuminate\Database\Eloquent\Model;

class DonorName extends Model
{
    protected $fillable = ['name', 'country_id', 'donor_type_id'];

    protected $with = ['pledges'];

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

     public function donor_type()
    {
    	return $this->belongsTo(DonorType::class);
    }

    public function pledges()
    {
    	return $this->hasMany(Pledge::class);
    }

    public function recieveds()
    {
    	return $this->hasMany(Recieved::class);
    }
}
