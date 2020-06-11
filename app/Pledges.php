<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pledges extends Model
{
    protected $fillable = ['donorname_id', 'amount'];

    public function donornames()
    {
    	return $this->belongsTo(DonorName::class);
    }
}
