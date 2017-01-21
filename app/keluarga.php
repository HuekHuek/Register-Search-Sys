<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluarga extends Model
{
	public $timestamps = false;
	protected $primaryKey = 'ahli_id';
	protected $guarded = [];
	
    public function penghuni() {
    	return $this->belongsTo('App\penghuni');
    }

    public function alamatkeluarga() {
    	return $this->hasOne('App\alamatkeluarga', 'ahli_id', 'ahli_id');
    }
}
