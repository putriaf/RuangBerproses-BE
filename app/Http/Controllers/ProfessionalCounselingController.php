<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalCounseling;
use Illuminate\Http\Request;

class ProfessionalCounselingController extends Controller
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
        return view('layanan.professionalCounseling.daftar', [
            'title' => 'Daftar Professional Counseling',
            'message' => NULL
        ]);
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
            'status' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'domisili' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => 'required'
        ]);

        $professionalcounseling = ProfessionalCounseling::create($validatedData);

        if ($professionalcounseling) {
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
     * @param  \App\Models\ProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalCounseling $professionalCounseling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfessionalCounseling $professionalCounseling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfessionalCounseling $professionalCounseling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfessionalCounseling $professionalCounseling)
    {
        //
    }
}
