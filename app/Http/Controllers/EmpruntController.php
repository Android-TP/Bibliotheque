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
        return response()->json(Emprunt::all());
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
        return response()->json(Emprunt::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function show(Emprunt $emprunt)
    {
        return response()->json($emprunt);
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
        $validated = $request->validated();
        if($emprunt){
            $emprunt->user_id = $validated["user_id"];
            $emprunt->livre_id = $validated["livre_id"];
            $emprunt->quantite = $validated["quantite"];
            $emprunt->date_remise = $validated["date_remise"];
            $emprunt->status = $validated["status"];
            $emprunt->save();
        }else{
            return response()->json(["response"=>"not found"], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emprunt  $emprunt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprunt $emprunt)
    {
        $emprunt->delete();
    }
}
