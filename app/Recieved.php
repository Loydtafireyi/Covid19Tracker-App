<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recieved extends Model
{
    protected $fillable = ['amount', 'donorname_id'];

    public function donorname()
    {
    	return $this->belongsTo(DonoName::class);
    }
}
