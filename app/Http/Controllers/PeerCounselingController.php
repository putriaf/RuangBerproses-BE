<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PeerCounseling;

class PeerCounselingController extends Controller
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
        return view('layanan.peerCounseling.daftar', [
            'title' => 'Daftar Virtual Peer Counseling',
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
            'status' => 'required',
            'domisili' => 'required',
            'pernah_gabung' => 'required',
            'konselor' => 'required',
            'pengalaman' => 'required',
            'keluhan' => 'required',
            'latar_belakang' => 'required',
            'tujuan' => 'required',
            'consent_sharing' => 'required',
            'consent_screening' => 'required',
        ]);

        $peercounseling = PeerCounseling::create($validatedData);

        if ($peercounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Pendaftaran Peer Counseling Berhasil!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pendaftaran Peer Counseling Gagal!',
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
        $peercounseling = PeerCounseling::select('peer_counselings.id', 'peer_counselings.user_id', 'peer_counselings.pengalaman', 'peer_counselings.konselor', 'peer_counselings.created_at', 'peer_counselings.updated_at', 'users.nama', 'users.foto_profil')
        ->join('users', 'users.id', '=', 'peer_counselings.user_id')->where('peer_counselings.id', $id)->first();
        if ($peercounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Peer Counseling',
                'data'    => $peercounseling
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Peer Counseling tidak ditemukan!',
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
        return view('layanan.peerCounseling.edit', [
            'title' => 'Edit Data',
            'peercounseling' => PeerCounseling::where('id', $id)->first()
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
        $peercounseling = PeerCounseling::find($id);
        $peercounseling->update($input);
        if ($peercounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Peer Counseling data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Peer Counseling data is failed!',
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
        $peercounseling = PeerCounseling::destroy($id);
        if ($peercounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Peer Counseling data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Peer Counseling data has been failed!',
            ], 500);
        }
    }
}
