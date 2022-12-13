<?php

namespace App\Http\Controllers;

use App\Models\Counselor;
use Illuminate\Http\Request;

class CounselorController extends Controller
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
     * @param   \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lahir' => '',
            'riwayat_pendidikan' => 'required',
            'lama_kerja' => 'required',
            'pengalaman_kerja' => 'required',
            'bidang_keahlian' => 'required',
            'link_linkedin' => '',
            'foto' => ''
        ]);

        $counselor = Counselor::create($validatedData);

        if ($counselor) {
            return response()->json([
                'success' => true,
                'message' => 'Penambahan Data Konselor Berhasil!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Penambahan Data Konselor Gagal!',
            ], 400);
        }
    }

    public function all()
    {
        $counselors = Counselor::all();
        if ($counselors) {
            return response()->json([
                'success' => true,
                'message' => 'Seluruh Data Konselor',
                'data'    => $counselors
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada data konselor!',
                'data'    => ''
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $counselor = Counselor::select('*')->where('counselors.id', $id)->first();
        if ($counselor) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Konselor',
                'data'    => $counselor
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Konselor tidak ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function edit(Counselor $counselor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCounselorRequest  $request
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counselor $counselor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counselor $counselor)
    {
        //
    }
}