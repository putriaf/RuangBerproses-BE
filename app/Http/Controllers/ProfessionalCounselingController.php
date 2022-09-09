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
    public function show($id)
    {
        $professionalcounseling = ProfessionalCounseling::select('professional_counselings.id', 'professional_counselings.user_id', 'professional_counselings.status', 'professional_counselings.bukti_transfer', 'professional_counselings.created_at', 'professional_counselings.updated_at', 'users.nama', 'users.foto_profil')
        ->join('users', 'users.id', '=', 'professional_counselings.user_id')->where('professional_counselings.id', $id)->first();
        if ($professionalcounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Professional Counseling',
                'data'    => $professionalcounseling
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Professional Counseling tidak ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('layanan.professionalCounseling.edit', [
            'title' => 'Edit Data',
            'professionalcounseling' => ProfessionalCounseling::where('id', $id)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $professionalcounseling = ProfessionalCounseling::find($id);
        $professionalcounseling->update($input);
        if ($professionalcounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Professional Counseling data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Professional Counseling data is failed!',
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professionalcounseling = ProfessionalCounseling::destroy($id);
        if ($professionalcounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Professional Counseling data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Professional Counseling data has been failed!',
            ], 500);
        }
    }
}
