<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spent extends Model
{
    protected $guarded = [];

    public function focusArea()
    {
    	return $this->belongsTo(FocusArea::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
