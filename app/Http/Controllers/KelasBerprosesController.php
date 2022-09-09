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
        $kelasberproses = KelasBerproses::select('kelas_berproses.id', 'kelas_berproses.user_id', 'kelas_berproses.pilihan_kelasberproses', 'kelas_berproses.bukti_transfer', 'kelas_berproses.created_at', 'kelas_berproses.updated_at', 'users.nama', 'users.foto_profil')
        ->join('users', 'users.id', '=', 'kelas_berproses.user_id')->where('kelas_berproses.id', $id)->first();
        if ($kelasberproses) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Kelas Berproses',
                'data'    => $kelasberproses
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Kelas Berproses tidak ditemukan!',
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
        return view('layanan.kelasBerproses.edit', [
            'title' => 'Edit Data',
            'kelasberproses' => KelasBerproses::where('id', $id)->first()
        ]);
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
        $kelasberproses = KelasBerproses::find($id);
        $kelasberproses->update($input);
        if ($kelasberproses) {
            return response()->json([
                'success' => true,
                'message' => 'Kelas Berproses data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Kelas Berproses data is failed!',
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
        $kelasberproses = KelasBerproses::destroy($id);
        if ($kelasberproses) {
            return response()->json([
                'success' => true,
                'message' => 'Kelas Berproses data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Kelas Berproses data has been failed!',
            ], 500);
        }
    }
}
