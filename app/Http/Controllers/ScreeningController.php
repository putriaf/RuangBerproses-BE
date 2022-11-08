<?php

namespace App\Http\Controllers;

use App\Models\Screening;
use Illuminate\Http\Request;
use App\Models\User;

class ScreeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'user_id' => 'required',
            'marah_sepele' => 'required',
            'mulut_kering' => 'required',
            'tdk_melihat_hal_positif' => 'required',
            'gangguan_napas' => 'required',
            'tdk_kuat_kegiatan' => 'required',
            'overreacting' => 'required',
            'anggota_tubuh_lemah' => 'required',
            'sulit_bersantai' => 'required',
            'cemas_berlebih' => 'required',
            'pesimis' => 'required',
            'mudah_kesal' => 'required',
            'energi_habis' => 'required',
            'sedih_depresi' => 'required',
            'tidak_sabaran' => 'required',
            'kelelahan' => 'required',
            'hilang_minat' => 'required',
            'merasa_tdk_layak' => 'required',
            'mudah_tersinggung' => 'required',
            'berkeringat' => 'required',
            'takut_tanpa_alasan' => 'required',
            'merasa_tdk_berharga' => 'required',
            'sulit_istirahat' => 'required',
            'sulit_menelan' => 'required',
            'tdk_menikmati_aktivitas' => 'required',
            'perubahan_denyut_nadi' => 'required',
            'hilang_harapan' => 'required',
            'mudah_marah' => 'required',
            'mudah_panik' => 'required',
            'sulit_tenang' => 'required',
            'takut_terhambat' => 'required',
            'sulit_antusias' => 'required',
            'sulit_toleransi_gangguan' => 'required',
            'tegang' => 'required',
            'tdk_memaklumi_halangan' => 'required',
            'ketakutan' => 'required',
            'tdk_ada_harapan' => 'required',
            'hidup_tdk_berarti' => 'required',
            'mudah_gelisah' => 'required',
            'khawatir_dg_situasi' => 'required',
            'gemetar' => 'required',
            'sulit_inisiatif' => 'required'
        ]);

        $screening = Screening::create($validatedData);

        if ($screening) {
            return response()->json([
                'success' => true,
                'message' => 'Data screening berhasil ditambahkan!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data screening gagal ditambahkan!',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $screening = Screening::select('*')
            ->join('users', 'users.id', '=', 'screenings.user_id')->where('screenings.id', $id)->first();
        if ($screening) {
            return response()->json([
                'success' => true,
                'message' => 'Data Screening Pendaftaran Layanan',
                'data'    => $screening
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Screening Pendaftaran Layanan Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    public function showByUserID($id)
    {
        $screening = Screening::select('*')
            ->join('users', 'users.id', '=', 'screenings.user_id')->where('screenings.user_id', $id)->first();
        if ($screening) {
            return response()->json([
                'success' => true,
                'message' => 'Data Screening Pendaftaran Layanan',
                'data'    => $screening
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Screening Pendaftaran Layanan Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
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
        $input = $request->all();
        $screening = Screening::find($id);
        $screening->update($input);
        if ($screening) {
            return response()->json([
                'success' => true,
                'message' => 'Screening data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Screening data is failed!',
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $screening = Screening::destroy($id);
        if ($screening) {
            return response()->json([
                'success' => true,
                'message' => 'Screening data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Screening data has been failed!',
            ], 500);
        }
    }
}