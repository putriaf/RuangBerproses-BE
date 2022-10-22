<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationPsytalk;

class RegistrationPsytalkController extends Controller
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
            'psytalk_id' => 'required',
            'alasan' => 'required',
            'asal_info' => 'required',
            'pertanyaan' => 'required',
            'bukti_transfer' => '',
            'status_pendaftaran' => 'required',
            'ide_topik' => 'required'
        ]);

        $regpsytalk = RegistrationPsytalk::create($validatedData);

        if ($regpsytalk) {
            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran Psytalk Berhasil!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Psytalk Gagal!',
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
        $psytalkdata = RegistrationPsytalk::select('registration_psytalks.id', 'registration_psytalks.user_id', 'registration_psytalks.psytalk_id', 'registration_psytalks.alasan', 'registration_psytalks.asal_info', 'registration_psytalks.pertanyaan', 'registration_psytalks.bukti_transfer', 'registration_psytalks.status_pendaftaran', 'registration_psytalks.ide_topik',)
            ->join('users', 'users.id', '=', 'registration_psytalks.user_id')->join('psytalks', 'psytalks.id', '=', 'registration_psytalks.psytalk_id')->where('registration_psytalks.id', $id)->first();
        if ($psytalkdata) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Pendaftaran Psytalk',
                'data'    => $psytalkdata
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Pendaftaran Psytalk!',
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
        $regpsytalk = RegistrationPsytalk::find($id);
        $regpsytalk->update($input);
        if ($regpsytalk) {
            return response()->json([
                'success' => true,
                'message' => 'Psytalk Registration data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Psytalk Registration data is failed!',
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
        $regpsytalk = RegistrationPsytalk::destroy($id);
        if ($regpsytalk) {
            return response()->json([
                'success' => true,
                'message' => 'Psytalk Registration data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Psytalk Registration data has been failed!',
            ], 500);
        }
    }
}