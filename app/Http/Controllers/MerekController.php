<?php

namespace App\Http\Controllers;

use App\Models\merek;
use App\Http\Requests\StoremerekRequest;
use App\Http\Requests\UpdatemerekRequest;

class MerekController extends Controller
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
     * @param  \App\Http\Requests\StoremerekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremerekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function show(merek $merek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function edit(merek $merek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemerekRequest  $request
     * @param  \App\Models\merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemerekRequest $request, merek $merek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function destroy(merek $merek)
    {
        //
    }
}
