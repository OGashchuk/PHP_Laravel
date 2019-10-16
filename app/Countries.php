<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	public function tour(){
		return $this->hasOne('Tour', 'Country');
	}
}
