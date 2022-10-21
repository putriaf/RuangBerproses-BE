<?php

namespace App\Http\Controllers;

use App\Models\Counselor;
use App\Http\Requests\StoreCounselorRequest;
use App\Http\Requests\UpdateCounselorRequest;

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
     * @param  \App\Http\Requests\StoreCounselorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCounselorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counselor  $counselor
     * @return \Illuminate\Http\Response
     */
    public function show(Counselor $counselor)
    {
        //
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
    public function update(UpdateCounselorRequest $request, Counselor $counselor)
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
