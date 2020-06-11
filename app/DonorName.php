<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorName extends Model
{
    protected $fillable = ['name', 'country_id', 'donortype_id'];

    public function country()
    {
    	return $this->belongsTo(Country::class);
    }

     public function donortype()
    {
    	return $this->belongsTo(DonorType::class);
    }

    public function pledge()
    {
    	return $this->hasMany(Pledge::class);
    }

    public function recieved()
    {
    	return $this->hasMany(Recived::class);
    }
}
