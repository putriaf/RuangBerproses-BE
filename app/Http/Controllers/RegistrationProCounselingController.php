<?php

namespace App\Http\Controllers;

use App\Models\RegistrationProCounseling;
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
        $profilUser = User::where('id', $user_id)->first();
        return response()->json(['profile' => $profilUser], 200);
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
            'preferensi_jk_konselor' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => '',
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
        $procounselingdata = RegistrationProCounseling::select('registration_pro_counselings.id', 'registration_pro_counselings.user_id', 'registration_pro_counselings.procounseling_id', 'registration_pro_counselings.consent_sharing', 'registration_pro_counselings.consent_screening', 'registration_pro_counselings.bukti_transfer', 'registration_pro_counselings.status_pendaftaran')
            ->join('users', 'users.id', '=', 'registration_pro_counselings.user_id')->join('professional_counselings', 'professional_counselings.id', '=', 'registration_pro_counselings.procounseling_id')->where('registration_pro_counselings.id', $id)->first();
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