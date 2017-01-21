<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harta extends Model
{
	public $timestamps = false;
	protected $primaryKey = 'harta_id';
	protected $guarded = [];
	
    public function penghuni() {
    	return $this->belongsTo('App\penghuni');
    }
}
