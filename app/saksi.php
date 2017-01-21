<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saksi extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'penghuni_id';
    protected $guarded = [];

    public function penghuni() {
    	return $this->belongsTo('App\penghuni');
    }
}
