<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends Controller
{
    // public function home() {
    // 	return view('welcome');
    // }

    public function cari() {
    	$penghuni_daftar = \DB::table('penghunis')->paginate(5);
    	return view('pencarian', compact('penghuni_daftar'));
    }

    public function daftarBerjaya() {
    	return view('berjaya');
    }
}
