<?php

namespace App\Http\Controllers;

use App\Models\order_detail;
use App\Http\Requests\Storeorder_detailRequest;
use App\Http\Requests\Updateorder_detailRequest;

class OrderDetailController extends Controller
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
     * @param  \App\Http\Requests\Storeorder_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeorder_detailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function show(order_detail $order_detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(order_detail $order_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateorder_detailRequest  $request
     * @param  \App\Models\order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Updateorder_detailRequest $request, order_detail $order_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order_detail  $order_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(order_detail $order_detail)
    {
        //
    }
}
