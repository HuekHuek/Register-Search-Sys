<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alamatkeluarga extends Model
{
	public $timestamps = false;
	protected $primaryKey = 'ala_keluarga_id';
	protected $guarded = [];
	
    // public $table = 'alamatkeluarga';
    public function keluarga() {
    	return $this->belongsTo('App\keluarga', 'ahli_id', 'ahli_id');
    }
}
