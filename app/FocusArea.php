<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FocusArea extends Model
{
    protected $fillable = ['name'];

    public function spents()
    {
    	return $this->hasMany(Spent::class);
    }

}
