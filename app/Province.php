<?php

namespace App;

use App\Death;
use App\Infection;
use App\Recovered;
use App\RequestAmbulance;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['name', 'country_id', 'code'];

    public function infections()
    {
    	return $this->hasMany(Infection::class);
    }

    public function request_ambulances()
    {
    	return $this->hasMany(RequestAmbulance::class);
    }

    public function deaths()
    {
    	return $this->hasMany(Death::class);
    }

    public function recovered()
    {
        return $this->hasMany(Recovered::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function quarantines()
    {
        return $this->hasMany(Quarantine::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
