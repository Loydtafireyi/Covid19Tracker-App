<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FocusAreaDonor extends Model
{
    protected $fillable ['focus_area_id', 'donor_name_id', 'recieved_id'];

    public function focus_area()
    {
    	return $this->belongsTo(FocusArea::class);
    }

    public function donor_name()
    {
    	return $this->belongsTo(DonorName::class);
    }

    public function recieved()
    {
    	return $this->belongsTo(Recieved::class);
    }
}
