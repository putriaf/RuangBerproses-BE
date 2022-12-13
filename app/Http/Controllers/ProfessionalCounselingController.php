<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalCounseling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        // waktu dan biaya digunakan ketika ada jadwal psikolog (scalable)
        $validatedData = $request->validate([
            'counselor_id' => 'required',
            'tanggal' => '',
            'waktu' => '',
            'biaya' => 'required',
            'link_event' => ''
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

    public function all()
    {
        $professionalcounseling = ProfessionalCounseling::all();
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
     * Display the specified resource.
     *
     * @param  \App\Models\ProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professionalcounseling = ProfessionalCounseling::select('*')->where('professional_counselings.id', $id)->first();
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
        //
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