<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Http\Requests\StoreEmpruntRequest;
use App\Http\Requests\UpdateEmpruntRequest;

class EmpruntController extends Controller
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
     * @param  \App\Http\Requests\StoreEmpruntRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpruntRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function show(Emprunt $emprunt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprunt $emprunt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpruntRequest  $request
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpruntRequest $request, Emprunt $emprunt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprunt $emprunt)
    {
        //
    }
}
