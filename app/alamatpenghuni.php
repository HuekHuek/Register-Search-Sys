<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alamatpenghuni extends Model
{
	public $timestamps = false;
	protected $guarded = [];
	protected $primaryKey = 'ala_penghuni_id';

	// public $table = 'alamatpenghuni';
    public function penghuni() {
    	return $this->belongsTo('App\penghuni',  'penghuni_id',  'penghuni_id');
    }
}
