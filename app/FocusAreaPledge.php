<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FocusAreaPledge extends Model
{
    protected $fillable ['pledge_id', 'donor_name_id'];

    public function pledge()
    {
    	return $this->belongsTo(Pledge::class);
    }

    public function donorname()
    {
    	return $this->belongsTo(DonorName::class);
    }
}
