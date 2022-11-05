<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationPeerCounseling;

class RegistrationPeerCounselingController extends Controller
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
            'peercounseling_id' => 'required',
            'latar_belakang' => 'required',
            'tujuan' => 'required',
            'keluhan' => 'required',
            'preferensi_jk_konselor' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => '',
            'status_pendaftaran' => 'required',
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

        $regpeercounseling = RegistrationPeerCounseling::create($validatedData);

        if ($regpeercounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran Peer Counseling Berhasil!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Peer Counseling Gagal!',
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
        $peercounselingdata = RegistrationPeerCounseling::select('registration_peer_counselings.id', 'registration_peer_counselings.user_id', 'registration_peer_counselings.peercounseling_id', 'registration_peer_counselings.latar_belakang', 'registration_peer_counselings.tujuan', 'registration_peer_counselings.keluhan', 'registration_peer_counselings.preferensi_jk_konselor', 'registration_peer_counselings.consent_sharing', 'registration_peer_counselings.consent_screening', 'registration_peer_counselings.bukti_transfer', 'registration_peer_counselings.status_pendaftaran')
            ->join('users', 'users.id', '=', 'registration_peer_counselings.user_id')->join('peer_counselings', 'peer_counselings.id', '=', 'registration_peer_counselings.peercounseling_id')->where('registration_peer_counselings.id', $id)->first();
        if ($peercounselingdata) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Pendaftaran Peer Counseling',
                'data'    => $peercounselingdata
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Pendaftaran Peer Counseling!',
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
        $regpeercounseling = RegistrationPeerCounseling::find($id);
        $regpeercounseling->update($input);
        if ($regpeercounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Peer Counseling Registration data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Peer Counseling Registration data is failed!',
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
        $regpeercounseling = RegistrationPeerCounseling::destroy($id);
        if ($regpeercounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Peer Counseling Registration data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Peer Counseling Registration data has been failed!',
            ], 500);
        }
    }
}