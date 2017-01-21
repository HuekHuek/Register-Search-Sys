<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penghuni;
use Illuminate\Support\Facades\Input;


class filterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->has('jantina_check') || request()->has('umur_check')) {
            $penghuni_daftar = penghuni::where(function($query) {
                $jantina = Input::has('jantina_check') ? Input::get('jantina_check') : [];
                $umur = Input::has('umur_check') ? Input::get('umur_check') : [];

                if(isset($jantina)) {
                    if(!empty($umur)) {
                        foreach ($jantina as $value) {
                            $query->where('jantina', '=', $value);
                        }
                    } else {
                        foreach ($jantina as $value) {
                            $query->orWhere('jantina', '=', $value);
                        }
                    }
                }

                if(isset($umur)) {
                    if(!empty($jantina)) {
                        if(in_array("18-30", $umur)) {
                            $query->whereBetween('umur', [18,30]);
                        }
                        if(in_array("30-50", $umur)) {
                            $query->whereBetween('umur', [30,50]);
                        }
                        if(in_array("50-70", $umur)) {
                            $query->whereBetween('umur', [50,70]);
                        }
                        if(in_array("70++", $umur)) {
                            $query->whereBetween('umur', [70,100]);
                        }
                    } else {
                        if(in_array("18-30", $umur)) {
                            $query->orWhereBetween('umur', [18,30]);
                        }
                        if(in_array("30-50", $umur)) {
                            $query->orWhereBetween('umur', [30,50]);
                        }
                        if(in_array("50-70", $umur)) {
                            $query->orWhereBetween('umur', [50,70]);
                        }
                        if(in_array("70++", $umur)) {
                            $query->orWhereBetween('umur', [70,100]);
                        }
                    }
                }
            })->paginate(5)
                ->appends('jantina_check', request('jantina_check'))
                ->appends('umur_check', request('umur_check'));
        } else {
            $penghuni_daftar = \DB::table('penghunis')->paginate(5);
        }

        // if(request()->has('jantina_check') || request()->has('umur_check')) {
        //     $penghuni_daftar = penghuni::where(function($query) {
        //         $jantina = Input::has('jantina_check') ? Input::get('jantina_check') : [];
        //         $umur = Input::has('umur_check') ? Input::get('umur_check') : [];

        //         if(isset($jantina)) {
        //             foreach ($jantina as $value) {
        //                 $query->where('jantina', '=', $jantina);
        //             }
        //         }

        //         if(isset($umur)) {
        //             if(in_array("18-30", $umur)) {
        //                 $query->whereBetween('umur', [18,30]);
        //             }
        //             if(in_array("30-50", $umur)) {
        //                 $query->whereBetween('umur', [30,50]);
        //             }
        //             if(in_array("50-70", $umur)) {
        //                 $query->whereBetween('umur', [50,70]);
        //             }
        //             if(in_array("70++", $umur)) {
        //                 $query->whereBetween('umur', [70,100]);
        //             }
        //         }
        //     })->paginate(5)
        //         ->appends('jantina_check', request('jantina_check'))
        //         ->appends('umur_check', request('umur_check'));
        // } else {
        //     $penghuni_daftar = \DB::table('penghunis')->paginate(5);
        // }

        return view('pencarian', compact('penghuni_daftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
