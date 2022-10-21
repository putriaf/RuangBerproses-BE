<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationProCounseling extends Controller
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
            'procounseling_id' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => 'required',
            'status_pendaftaran' => 'required'
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