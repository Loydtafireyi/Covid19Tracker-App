<?php

namespace App;

use App\DonorName;
use Illuminate\Database\Eloquent\Model;

class Pledge extends Model
{
    protected $fillable = ['donor_name_id', 'amount'];

    public function donor_name()
    {
    	return $this->belongsTo(DonorName::class);
    }
}
