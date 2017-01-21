<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\penghuni;
use App\alamatpenghuni;
use App\penyakit;
use App\harta;
use App\keluarga;
use App\alamatkeluarga;
use App\saksi;

class daftarPenghuni extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendaftaran');
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required|alpha|max:100',
            'kp' => 'required|numeric',
            'umur' => 'required||numeric',
            'bangsa' => 'required|alpha',
            'agama' => 'required|alpha|max:10',
            'jantina' => 'required|alpha|max:10',
            'taraf_p' => 'required|alpha|max:10',
            'sek' => 'required|max:20',
            'alamat' => 'required|max:50',
            'negeri' => 'required|alpha|max:20',
            'bandar' => 'required|alpha|max:20',
            'poskod' => 'required|numeric',
            'sejarah' => 'required|max:500',
            'ahli_nama.*' => 'required|alpha|max:100',
            'ahli_kp.*' => 'required|numeric',
            'ahli_umur.*' => 'required||numeric',
            'ahli_bangsa.*' => 'required|alpha',
            'ahli_agama.*' => 'required|alpha|max:10',
            'ahli_jantina.*' => 'required|alpha|max:10',
            'ahli_hubungan.*' => 'required|alpha|max:15',
            'ahli_pekerjaan.*' => 'required|alpha|max:15',
            'ahli_tel_nom.*' => 'required|numeric',
            'ahli_alamat.*' => 'required|max:50',
            'ahli_negeri.*' => 'required|alpha|max:20',
            'ahli_bandar.*' => 'required|alpha|max:20',
            'ahli_poskod.*' => 'required|numeric',
            'saksi_nama' => 'required|alpha',
            'saksi_kp' => 'required|numeric',
            'saksi_tel' => 'required|numeric',
        ]);
        
        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $penghuni = new penghuni;
        $penghuni->nama = $request->nama;
        $penghuni->kp = $request->kp;
        $penghuni->umur = $request->umur;
        $penghuni->bangsa = $request->bangsa;
        $penghuni->agama = $request->agama;
        $penghuni->taraf_kahwin = $request->taraf_p;
        $penghuni->peringkat_sek = $request->sek;
        $penghuni->sejarah = $request->sejarah;
        $penghuni->jantina = $request->jantina;
        $penghuni->tarikhMeninggal = '';

        if($penghuni->save()) {
            $alamatpenghuni = new alamatpenghuni;
            $alamatpenghuni->penghuni_id = $penghuni->penghuni_id;
            $alamatpenghuni->alamat = $request->alamat;
            $alamatpenghuni->negeri = $request->negeri;
            $alamatpenghuni->bandar = $request->bandar;
            $alamatpenghuni->poskod = $request->poskod;
            $alamatpenghuni->save();
        };

        $str_penyakit = '';
        if($request->penyakit != ''){
            foreach ($request->penyakit as $key => $value) {
                $str_penyakit .= ',' . $request->penyakit[$key];
            }
            $str_penyakit = substr($str_penyakit, 1);
        }
        $penyakit = new penyakit;
        $penyakit->penghuni_id = $penghuni->penghuni_id;
        $penyakit->penyakit = $str_penyakit;
        $penyakit->ubat = $request->senarai_ubat;
        $penyakit->save();

        foreach ($request->barang as $key => $value) {
            $harta_data = array('penghuni_id' => $penghuni->penghuni_id,
                            'barang' => $request->barang[$key],
                            'qty' => $request->qty[$key]);
            harta::insert($harta_data);
        }

        foreach($request->ahli_nama as $key => $value){
            $keluarga = new keluarga;
            $keluarga->penghuni_id = $penghuni->penghuni_id;
            $keluarga->ahli_nama = $request->ahli_nama[$key];
            $keluarga->ahli_kp = $request->ahli_kp[$key];
            $keluarga->ahli_kerja = $request->ahli_pekerjaan[$key];
            $keluarga->ahli_tel = $request->ahli_tel_nom[$key];
            $keluarga->ahli_agama = $request->ahli_agama[$key];
            $keluarga->ahli_bangsa = $request->ahli_bangsa[$key];
            $keluarga->ahli_umur = $request->ahli_umur[$key];
            $keluarga->ahli_jantina = $request->ahli_jantina[$key];
            $keluarga->ahli_hubungan = $request->ahli_hubungan[$key];

            if($keluarga->save()) {
                $alamatkeluarga = new alamatkeluarga;
                $alamatkeluarga->ahli_id = $keluarga->ahli_id;
                $alamatkeluarga->ahli_alamat = $request->ahli_alamat[$key];
                $alamatkeluarga->ahli_negeri = $request->ahli_negeri[$key];
                $alamatkeluarga->ahli_bandar = $request->ahli_bandar[$key];
                $alamatkeluarga->ahli_poskod = $request->ahli_poskod[$key];
                $alamatkeluarga->save();
            }
        }

        $saksi = new saksi;
        $saksi->penghuni_id = $penghuni->penghuni_id;
        $saksi->saksi_nama = $request->saksi_nama;
        $saksi->saksi_kp = $request->saksi_kp;
        $saksi->saksi_tel = $request->saksi_tel;
        $saksi->save();

        return redirect('daftarBerjaya');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($penghuni_id)
    {
        $penghuni = \DB::table('penghunis')
                            ->join('alamatpenghunis', 'penghunis.penghuni_id', '=', 'alamatpenghunis.penghuni_id')
                            ->join('penyakits', 'penghunis.penghuni_id', '=', 'penyakits.penghuni_id')
                            ->join('saksis', 'penghunis.penghuni_id', '=', 'saksis.penghuni_id')
                            ->select('*')
                            ->where('penghunis.penghuni_id', '=', $penghuni_id)
                            ->first();

        $hartas = \DB::table('hartas')
                            ->select('hartas.barang', 'hartas.qty')
                            ->where('penghuni_id', '=', $penghuni_id)
                            ->get();

        $keluargas = \DB::table('keluargas')
                            ->join('alamatkeluargas', 'keluargas.ahli_id', '=', 'alamatkeluargas.ahli_id')
                            ->select('*')
                            ->where('keluargas.penghuni_id', '=', $penghuni_id)
                            ->get();

        return view('penghuni_detail', compact('penghuni', 'hartas', 'keluargas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($penghuni_id)
    {
        $penghuni = \DB::table('penghunis')
                            ->join('alamatpenghunis', 'penghunis.penghuni_id', '=', 'alamatpenghunis.penghuni_id')
                            ->join('penyakits', 'penghunis.penghuni_id', '=', 'penyakits.penghuni_id')
                            ->select('*')
                            ->where('penghunis.penghuni_id', '=', $penghuni_id)
                            ->first();

        $hartas = \DB::table('hartas')
                            ->select('hartas.barang', 'hartas.qty')
                            ->where('penghuni_id', '=', $penghuni_id)
                            ->get();

        $keluargas = \DB::table('keluargas')
                            ->join('alamatkeluargas', 'keluargas.ahli_id', '=', 'alamatkeluargas.ahli_id')
                            ->select('*')
                            ->where('keluargas.penghuni_id', '=', $penghuni_id)
                            ->get();

        return view('penghuni_edit', compact('penghuni', 'hartas', 'keluargas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $penghuni_id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|alpha|max:100',
            'kp' => 'required|numeric',
            'umur' => 'required||numeric',
            'bangsa' => 'required|alpha|max:10',
            'agama' => 'required|alpha|max:10',
            'jantina' => 'required|alpha|max:10',
            'taraf_p' => 'required|alpha|max:10',
            'sek' => 'required|max:20',
            'alamat' => 'required|max:50',
            'negeri' => 'required|alpha|max:20',
            'bandar' => 'required|alpha|max:20',
            'poskod' => 'required|numeric',
            'sejarah' => 'required|max:500',
            'ahli_nama.*' => 'required|alpha|max:100',
            'ahli_kp.*' => 'required|numeric',
            'ahli_umur.*' => 'required||numeric',
            'ahli_bangsa.*' => 'required|alpha|max:10',
            'ahli_agama.*' => 'required|alpha|max:10',
            'ahli_jantina.*' => 'required|alpha|max:10',
            'ahli_hubungan.*' => 'required|alpha|max:15',
            'ahli_pekerjaan.*' => 'required|alpha|max:15',
            'ahli_tel_nom.*' => 'required|numeric',
            'ahli_alamat.*' => 'required|max:50',
            'ahli_negeri.*' => 'required|alpha|max:20',
            'ahli_bandar.*' => 'required|alpha|max:20',
            'ahli_poskod.*' => 'required|numeric',
            'saksi_nama' => 'required|alpha',
            'saksi_kp' => 'required|numeric',
            'saksi_tel' => 'required|numeric',
        ]);
        
        $penghuni = penghuni::find($penghuni_id);
        $penghuni->nama = $request->nama;
        $penghuni->kp = $request->kp;
        $penghuni->umur = $request->umur;
        $penghuni->bangsa = $request->bangsa;
        $penghuni->agama = $request->agama;
        $penghuni->taraf_kahwin = $request->taraf_p;
        $penghuni->peringkat_sek = $request->sek;
        $penghuni->sejarah = $request->sejarah;
        $penghuni->jantina = $request->jantina;
        $penghuni->tarikhMeninggal = $request->tarikhMeninggal;
        $penghuni->penghuni_id = $penghuni_id;

        $alamatpenghuni = penghuni::find($penghuni_id)->alamatpenghuni;
        $alamatpenghuni->alamat = $request->alamat;
        $alamatpenghuni->negeri = $request->negeri;
        $alamatpenghuni->bandar = $request->bandar;
        $alamatpenghuni->poskod = $request->poskod;

        $str_penyakit = '';
        if($request->penyakit != ''){
            foreach ($request->penyakit as $key => $value) {
                $str_penyakit .= ',' . $request->penyakit[$key];
            }
            $str_penyakit = substr($str_penyakit, 1);
        }
        $penyakit = penghuni::find($penghuni_id)->penyakit;
        $penyakit->penyakit = $str_penyakit;
        $penyakit->ubat = $request->senarai_ubat;

        $keluargas = penghuni::find($penghuni_id)->keluarga;
        foreach ($keluargas as $key => $keluarga) {
            $keluarga->ahli_nama = $request->ahli_nama[$key];
            $keluarga->ahli_kp = $request->ahli_kp[$key];
            $keluarga->ahli_kerja = $request->ahli_pekerjaan[$key];
            $keluarga->ahli_tel = $request->ahli_tel_nom[$key];
            $keluarga->ahli_agama = $request->ahli_agama[$key];
            $keluarga->ahli_bangsa = $request->ahli_bangsa[$key];
            $keluarga->ahli_umur = $request->ahli_umur[$key];
            $keluarga->ahli_jantina = $request->ahli_jantina[$key];
            $keluarga->ahli_hubungan = $request->ahli_hubungan[$key];
            $keluarga->save();
        }

        $alamatkeluargas = keluarga::where('penghuni_id', $penghuni_id)->get();
        foreach($alamatkeluargas as $key => $alamat){
            $alamat->alamatkeluarga->ahli_alamat = $request->ahli_alamat[$key];
            $alamat->alamatkeluarga->ahli_negeri = $request->ahli_negeri[$key];
            $alamat->alamatkeluarga->ahli_bandar = $request->ahli_bandar[$key];
            $alamat->alamatkeluarga->ahli_poskod = $request->ahli_poskod[$key];
            $alamat->alamatkeluarga->save();
        }
        
        $hartas = penghuni::find($penghuni_id)->harta;
        foreach ($hartas as $key => $harta) {
            $harta->barang = $request->barang[$key];
            $harta->qty = $request->qty[$key];
            $harta->save();
        }

        $penghuni->save();
        $alamatpenghuni->save();
        $penyakit->save();
        return redirect()->back();
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
