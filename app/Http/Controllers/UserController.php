<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RegistrationProCounseling;
use App\Models\RegistrationPeerCounseling;
use App\Models\RegistrationSupportGroup;
use App\Models\RegistrationPsytalk;
use App\Models\RegistrationKelasBerproses;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "Profil Saya";
        $user_id = $request->user()->id;
        $profilUser = User::where('id', $user_id)->first();
        // Status Pendaftaran
        // konfirmasi_admin: menunggu konfirmasi pembayaran oleh admin
        // berhasil: layanan/program bisa diikuti
        // gagal: konfirmasi tidak berhasil
        $reg_procounseling = RegistrationProCounseling::select('registration_pro_counselings.*', 'professional_counselings.*', 'counselors.*')->where('user_id', $user_id)->join('professional_counselings', 'professional_counselings.id', '=', 'registration_pro_counselings.procounseling_id')->join('counselors', 'counselors.id', '=', 'professional_counselings.counselor_id')->get();
        $reg_peercounseling = RegistrationPeerCounseling::where('user_id', $user_id)->get();
        $reg_sg = RegistrationSupportGroup::where('user_id', $user_id)->get();
        $reg_psytalk = RegistrationPsytalk::join('psytalks', 'psytalks.id', '=', 'registration_psytalks.psytalk_id')->where('user_id', $user_id)->get();
        $reg_kb = RegistrationKelasBerproses::where('user_id', $user_id)->get();
        return response()->json([
            'profile' => $profilUser,
            'reg_procounseling' => $reg_procounseling,
            'reg_peercounseling' => $reg_peercounseling,
            'reg_sg' => $reg_sg,
            'reg_psytalk' => $reg_psytalk,
            'reg_kb' => $reg_kb
        ], 200);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $title = "My Profile";
        $id = $request->user()->id;
        $profilUser = User::where('id', $id)->first();
        return response()->json([
            'profile' => $profilUser
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($username)
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
    public function update(Request $request, $username)
    {
        $id = $request->user()->id;
        if ($request->password == null) {
            $input = $request->except(['password']);
        } else {
            $input = $request->all();
        }
        $user = User::find($id);
        $user = $user->update($input);
        $profilUser = User::where('username', $username)->first();
        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'Profile updated!',
                'data' => $profilUser
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Profile failed to update!',
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}