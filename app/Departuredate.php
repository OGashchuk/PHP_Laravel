<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departuredate extends Model
{
	protected $fillable = ['departure_date']; 
	protected $primaryKey = 'id_departure_date';
}
