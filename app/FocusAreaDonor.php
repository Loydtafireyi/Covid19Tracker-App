<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FocusAreaDonor extends Model
{
    protected $fillable ['focusarea_id', 'donorname_id', 'recieved_id'];

    public function focusarea()
    {
    	return $this->belongsTo(FocusArea::class);
    }

    public function donorname()
    {
    	return $this->belongsTo(DonorName::class);
    }

    public function recieved()
    {
    	return $this->belongsTo(Recieved::class);
    }
}
