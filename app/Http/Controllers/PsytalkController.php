<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Psytalk;

class PsytalkController extends Controller
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
        return view('layanan.psytalk.daftar', [
            'title' => 'Daftar Psytalk',
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
            'pilihan_webinar' => 'required',
            'domisili' => 'required',
            'pekerjaan' => 'required',
            'alasan' => 'required',
            'pernah_gabung' => 'required',
            'pertanyaan' => 'required',
            'sumber_info' => 'required',
            'bukti_transfer' => 'required'
        ]);

        $psytalk = Psytalk::create($validatedData);

        if ($psytalk) {
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
        $psytalk = Psytalk::select('psytalks.id', 'psytalks.user_id', 'psytalks.pilihan_webinar', 'psytalks.bukti_transfer', 'psytalks.created_at', 'psytalks.updated_at', 'users.nama', 'users.foto_profil')
        ->join('users', 'users.id', '=', 'psytalks.user_id')->where('psytalks.id', $id)->first();
        if ($psytalk) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Psytalk',
                'data'    => $psytalk
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Psytalk tidak ditemukan!',
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
        return view('layanan.psytalk.edit', [
            'title' => 'Edit Data',
            'psytalk' => Psytalk::where('id', $id)->first()
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
        $psytalk = Psytalk::find($id);
        $psytalk->update($input);
        if ($psytalk) {
            return response()->json([
                'success' => true,
                'message' => 'Psytalk data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Psytalk data is failed!',
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
        $psytalk = Psytalk::destroy($id);
        if ($psytalk) {
            return response()->json([
                'success' => true,
                'message' => 'Psytalk data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Psytalk data has been failed!',
            ], 500);
        }
    }
}
