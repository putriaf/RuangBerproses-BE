<?php

namespace App\Http\Controllers;

use App\Models\RegistrationKelasBerproses;
use Illuminate\Http\Request;

class RegistrationKelasBerprosesController extends Controller
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
            'kb_id' => 'required',
            'alasan' => 'required',
            'asal_info' => 'required',
            'pertanyaan' => 'required',
            'bukti_transfer' => '',
            'status_pendaftaran' => 'required',
            'ide_topik' => 'required'
        ]);

        $regkb = RegistrationKelasBerproses::create($validatedData);

        if ($regkb) {
            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran Kelas Berproses Berhasil!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Kelas Berproses Gagal!',
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
        $kbdata = RegistrationKelasBerproses::select('registration_kelas_berproses.id', 'registration_kelas_berproses.user_id', 'registration_kelas_berproses.kb_id', 'registration_kelas_berproses.alasan', 'registration_kelas_berproses.asal_info', 'registration_kelas_berproses.pertanyaan', 'registration_kelas_berproses.bukti_transfer', 'registration_kelas_berproses.status_pendaftaran', 'registration_kelas_berproses.ide_topik',)
            ->join('users', 'users.id', '=', 'registration_kelas_berproses.user_id')->join('kelas_berproses', 'kelas_berproses.id', '=', 'registration_kelas_berproses.kb_id')->where('registration_kelas_berproses.id', $id)->first();
        if ($kbdata) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Pendaftaran Kelas Berproses',
                'data'    => $kbdata
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Pendaftaran Kelas Berproses!',
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
        $regkb = RegistrationKelasBerproses::find($id);
        $regkb->update($input);
        if ($regkb) {
            return response()->json([
                'success' => true,
                'message' => 'Kelas Berproses Registration data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Kelas Berproses Registration data is failed!',
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
        $regkb = RegistrationKelasBerproses::destroy($id);
        if ($regkb) {
            return response()->json([
                'success' => true,
                'message' => 'Kelas Berproses Registration data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Kelas Berproses Registration data has been failed!',
            ], 500);
        }
    }
}