<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::select('*')->orderBy('artikels.created_at')->filter(request(['search']))->paginate(10)->withQueryString();
        return response()->json($artikels, 200);
    }

    public function getLatest()
    {
        $artikels = Artikel::select('artikels.judul', 'artikels.isi')->orderBy('artikels.created_at')->limit(4)->get();
        return response()->json($artikels, 200);
    }

    public function getTitles()
    {
        $judulartikel = Artikel::select('judul')->get();
        if ($judulartikel) {
            return response()->json([
                'success' => true,
                'message' => 'Judul Artikel',
                'data'    => $judulartikel
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan!',
                'data'    => ''
            ], 404);
        }
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
            'judul' => 'required',
            'isi' => 'required',
            'poster' => 'required'
        ]);

        $regprocounseling = Artikel::create($validatedData);

        if ($regprocounseling) {
            return response()->json([
                'success' => true,
                'message' => 'Penambahan Artikel Berhasil!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Penambahan Artikel Gagal!',
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
        $artikel = Artikel::select('*')
            ->join('users', 'users.id', '=', 'artikels.user_id')->where('artikels.id', $id)->first();
        if ($artikel) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Artikel',
                'data'    => $artikel
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan!',
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
        $srtikel = Artikel::find($id);
        $srtikel->update($input);
        if ($srtikel) {
            return response()->json([
                'success' => true,
                'message' => 'Article has been successfully updated!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Update Article is failed!',
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
        $artikel = Artikel::destroy($id);
        if ($artikel) {
            return response()->json([
                'success' => true,
                'message' => 'Article has been deleted!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Delete Article has been failed!',
            ], 500);
        }
    }
}