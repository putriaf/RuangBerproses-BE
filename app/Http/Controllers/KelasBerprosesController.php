<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KelasBerproses;

class KelasBerprosesController extends Controller
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
        return view('layanan.kelasBerproses.daftar', [
            'title' => 'Daftar Kelas Berproses',
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
            'usia' => 'required',
            'pilihan_kelasberproses' => 'required',
            'domisili' => 'required',
            'pekerjaan' => 'required',
            'alasan' => 'required',
            'pernah_gabung' => 'required',
            'pertanyaan' => 'required',
            'sumber_info' => 'required',
            'bukti_transfer' => 'required',
        ]);

        $kelasberproses = KelasBerproses::create($validatedData);

        if ($kelasberproses) {
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
