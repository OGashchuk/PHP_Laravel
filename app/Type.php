<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $fillable = ['type_name']; 
	protected $primaryKey = 'id_type';
}
