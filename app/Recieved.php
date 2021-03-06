<?php

namespace App;

use App\DonorName;
use Illuminate\Database\Eloquent\Model;

class Recieved extends Model
{
    protected $fillable = ['amount', 'donor_name_id'];

    public function donor_name()
    {
    	return $this->belongsTo(DonorName::class);
    }
}
