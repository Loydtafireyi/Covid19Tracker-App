<?php

namespace App;

use App\Province;
use Illuminate\Database\Eloquent\Model;

class Infection extends Model
{
	protected $fillable = ['province_id', 'date_reported', 'infections'];

	public function importToDB()
	{
		$path = resource_path('pending-uploads/*.csv');

		$g = glob($path);

		foreach (array_slice($g, 0, 1) as $file) {
			
			$data = array_map('str_getcsv', file($file));

			foreach ($data as $row) {
				self::updateOrCreate([
					'province_id' => $row[0]
				], [
					'date_reported' => $row[1],
					'infections' => $row[2]
				]);
			}

			unlink($file);
		}
	}

    public function province()
    {
    	return $this->belongsTo(Province::class);
    }
}
