<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalCounseling;
use App\Models\RegistrationProCounseling;
use App\Models\Screening;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrationProCounselingController extends Controller
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
    public function create(Request $request)
    {
        $user_id = $request->user()->id;
        $screening_id = Screening::where('user_id', $user_id)->get();
        $procounselings = ProfessionalCounseling::all();
        return response()->json([
            'success' => true,
            'message' => 'Semua Data',
            'screening_id' => $screening_id,
            'procounselings' => $procounselings,
        ], 200);
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
            'screening_id' => 'required',
            'procounseling_id' => 'required',
            'preferensi_jk_konselor' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => 'required',
            'status_pendaftaran' => 'required',
            'perubahan_fisik' => 'required',
            'perubahan_emosi' => 'required',
            'riwayat_kecemasan' => 'required',
            'penyakit_kronis' => 'required',
            'konsumsi_alkohol' => 'required',
            'konsumsi_obat' => 'required',
            'pola_tidur' => 'required',
            'pola_makan' => 'required',
            'kondisi_keuangan' => 'required',
            'ringkasan_masalah' => 'required',
            'pernah_konseling' => 'required',
            'menyakiti_diri' => 'required',
            'mengakhiri_hidup' => 'required',
            'sesi' => 'requied'
        ]);

        $regprocounseling = RegistrationProCounseling::create($validatedData);

        if ($regprocounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran Professional Counseling Berhasil!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Professional Counseling Gagal!',
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
        $procounselingdata = RegistrationProCounseling::select('*')->join('professional_counselings', 'professional_counselings.id', '=', 'registration_pro_counselings.procounseling_id')->where('registration_pro_counselings.id', $id)->first();
        if ($procounselingdata) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Pendaftaran Professional Counseling',
                'data'    => $procounselingdata
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Pendaftaran Professional Counseling!',
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
        $regprofessionalcounseling = RegistrationProCounseling::find($id);
        $regprofessionalcounseling->update($input);
        if ($regprofessionalcounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Professional Counseling Registration data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Professional Counseling Registration data is failed!',
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
        $regprofessionalcounseling = RegistrationProCounseling::destroy($id);
        if ($regprofessionalcounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Professional Counseling Registration data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Professional Counseling Registration data has been failed!',
            ], 500);
        }
    }
}