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
            'nama_konselor' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'biaya' => 'required'
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
        $peercounseling = PeerCounseling::select('*')
            ->where('peer_counselings.id', $id)->first();
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