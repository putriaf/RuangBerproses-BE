<?php

namespace App\Http\Controllers;

use App\Models\ListProfessionalCounseling;
use Illuminate\Http\Request;

class ListProfessionalCounselingController extends Controller
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
            'nama_konselor' => 'required',
            'waktu' => 'required',
            'biaya' => 'required'
        ]);

        $listprofessionalcounseling = ListProfessionalCounseling::create($validatedData);

        if ($listprofessionalcounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Daftar Professional Counseling Berhasil Ditambahkan!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Penambahan Daftar Professional Counseling Gagal!',
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListProfessionalCounseling  $listProfessionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function show(ListProfessionalCounseling $listProfessionalCounseling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListProfessionalCounseling  $professionalCounseling
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}