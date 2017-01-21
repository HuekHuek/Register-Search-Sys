<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
	public $timestamps = false;
	protected $primaryKey = 'penyakit_id';
	protected $guarded = [];

    public function penghuni() {
    	return $this->belongsTo('App\penghuni');
    }
}
