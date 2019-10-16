<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
	protected $fillable = ['title','description','cost','created-at','country_id', 'image'];   
	public function country(){
		return $this->hasMany('App\Country');
		//return $this->hasMany('App\Country', 'tours', 'coutry_id');
	}
}
