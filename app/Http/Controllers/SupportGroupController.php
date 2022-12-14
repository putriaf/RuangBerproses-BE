<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SupportGroup;

class SupportGroupController extends Controller
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
        return view('layanan.supportGroup.daftar', [
            'title' => 'Daftar Virtual support Group',
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
            'topik' => 'required',
            'fasilitator_utama' => 'required',
            'fasilitator_pendamping' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'biaya' => 'required',
            'link_event' => 'required'
        ]);

        $supportgroup = SupportGroup::create($validatedData);

        if ($supportgroup) {
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
        $supportgroup = SupportGroup::select('*')
            ->where('support_groups.id', $id)->first();
        if ($supportgroup) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Support Group',
                'data'    => $supportgroup
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Support Group tidak ditemukan!',
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
        $supportgroup = SupportGroup::find($id);
        $supportgroup->update($input);
        if ($supportgroup) {
            return response()->json([
                'success' => true,
                'message' => 'Support Group data has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Support Group data is failed!',
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
        $supportgroup = SupportGroup::destroy($id);
        if ($supportgroup) {
            return response()->json([
                'success' => true,
                'message' => 'Support group data has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete upport group data has been failed!',
            ], 500);
        }
    }
}