<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

use App\Models\ProfessionalCounseling;
use App\Models\RegistrationProCounseling;
use App\Models\PeerCounseling;
use App\Models\RegistrationPeerCounseling;
use App\Models\Psytalk;
use App\Models\RegistrationPsytalk;
use App\Models\SupportGroup;
use App\Models\RegistrationSupportGroup;
use App\Models\KelasBerproses;
use App\Models\RegistrationKelasBerproses;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professionalcounselings = ProfessionalCounseling::orderBy('id')->get();
        $regprofessionalcounselings = RegistrationProCounseling::orderBy('id')->get();
        $peercounselings = PeerCounseling::orderBy('id')->get();
        $regpeercounselings = RegistrationPeerCounseling::orderBy('id')->get();
        $supportgroups = SupportGroup::orderBy('id')->get();
        $regsupportgroups = RegistrationSupportGroup::orderBy('id')->get();
        $psytalks = Psytalk::orderBy('id')->get();
        $regpsytalks = RegistrationPsytalk::orderBy('id')->get();
        $kb = KelasBerproses::orderBy('id')->get();
        $regkbs = RegistrationKelasBerproses::orderBy('id')->get();
        $artikels = Artikel::orderBy('id')->get();
        return response()->json([
            'success' => true,
            'message' => 'Semua Data',
            'professionalcounselings' => $professionalcounselings,
            'regprofessionalcounselings' => $regprofessionalcounselings,
            'peercounselings' => $peercounselings,
            'regpeercounselings' => $regpeercounselings,
            'supportgroups' => $supportgroups,
            'regsupportgroups' => $regsupportgroups,
            'psytalks' => $psytalks,
            'regpsytalks' => $regpsytalks,
            'kb' => $kb,
            'regkbs' => $regkbs,
            'artikels' => $artikels
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