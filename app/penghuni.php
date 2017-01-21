<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penghuni extends Model
{
	public $timestamps = false;
	protected $primaryKey = 'penghuni_id';
    protected $guarded = [];

    public function alamatpenghuni() {
    	return $this->hasOne('App\alamatpenghuni', 'penghuni_id',  'penghuni_id');
    }

    public function penyakit() {
    	return $this->hasOne('App\penyakit');
    }

    public function harta() {
    	return $this->hasMany('App\harta');
    }

    public function keluarga() {
    	return $this->hasMany('App\keluarga');
    }

    public function saksi() {
    	return $this->hasOne('App\saksi');
    }

    // public function scopeSearch($query, $column, $operator = '=', $value = null, $boolean = 'and')
    // {
    //     if (is_array($column))
    //     {
    //         // use nested where wrapped in parentheses: where ( ... )
    //         $query->where(function ($q) use ($column, $operator, $boolean) {
    //             foreach ($column as $col => $value)
    //             {
    //                if($value == "umur_check") {
    //                     if(in_array("18-30", $umur)) {
    //                         $query->whereBetween('umur', [18,30]);
    //                     }
    //                     if(in_array("30-50", $umur)) {
    //                         $query->whereBetween('umur', [30,50]);
    //                     }
    //                     if(in_array("50-70", $umur)) {
    //                         $query->whereBetween('umur', [50,70]);
    //                     }
    //                     if(in_array("70++", $umur)) {
    //                         $query->whereBetween('umur', [70,100]);
    //                     }
    //                 }
    //                 // let s ignore NULL values for easier use with Input
    //                 if ( ! is_null($value)) $q->where($col, $operator, $value, $boolean);
    //             }
    //         });
    //     }
    //     else if ( ! is_null($value))
    //     {
    //         $query->where($column, $operator, $value, $boolean);
    //     }
    // }
}