<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationSupportGroup;

class RegistrationSupportGroupController extends Controller
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
            'supportgroup_id' => 'required',
            'tujuan' => 'required',
            'alasan' => 'required',
            'harapan' => 'required',
            'preferensi_jk_fasilitator' => 'required',
            'preferensi_jk_teman' => 'required',
            'diagnosis' => 'required',
            'terlibat_aktif' => 'required',
            'mengikuti_full' => 'required',
            'batasan_pribadi' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
            'bukti_transfer' => '',
            'status_pendaftaran' => 'required',
            'link_event' => 'required'
        ]);

        $regsupportgroup = RegistrationSupportGroup::create($validatedData);

        if ($regsupportgroup) {
            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran Support Group Berhasil!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Support Group Gagal!',
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
        $supportgroupdata = RegistrationSupportGroup::select('registration_support_groups.id', 'registration_support_groups.user_id', 'registration_support_groups.supportgroup_id', 'registration_support_groups.tujuan', 'registration_support_groups.alasan', 'registration_support_groups.harapan', 'registration_support_groups.preferensi_jk_fasilitator', 'registration_support_groups.preferensi_jk_teman', 'registration_support_groups.diagnosis', 'registration_support_groups.terlibat_aktif', 'registration_support_groups.mengikuti_full', 'registration_support_groups.batasan_pribadi', 'registration_support_groups.consent_sharing', 'registration_support_groups.consent_screening', 'registration_support_groups.bukti_transfer', 'registration_support_groups.status_pendaftaran')
            ->join('users', 'users.id', '=', 'registration_support_groups.user_id')->join('support_groups', 'support_groups.id', '=', 'registration_support_groups.supportgroup_id')->where('registration_support_groups.id', $id)->first();
        if ($supportgroupdata) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Pendaftaran Support Group',
                'data'    => $supportgroupdata
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Pendaftaran Support Group!',
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
        $regsupportgroup = RegistrationSupportGroup::find($id);
        $regsupportgroup->update($input);
        if ($regsupportgroup) {
            return response()->json([
                'success' => true,
                'message' => 'Support Group Registration data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Support Group Registration data is failed!',
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
        $regsupportgroup = RegistrationSupportGroup::destroy($id);
        if ($regsupportgroup) {
            return response()->json([
                'success' => true,
                'message' => 'Support Group Registration data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Support Group Registration data has been failed!',
            ], 500);
        }
    }
}