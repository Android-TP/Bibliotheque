<?php

namespace App\Http\Controllers\Abonnement;

use App\Models\Abonnement;
use App\Http\Requests\StoreAbonnementRequest;
use App\Http\Requests\UpdateAbonnementRequest;
use App\Http\Controllers\Controller;

class AbonnementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Abonnement::all());
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAbonnementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbonnementRequest $request)
    {
       return response()->json(Abonnement::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $abonnement_id
     * @return \Illuminate\Http\Response
     */
    public function show( int $abonnement_id)
    {
        return response()->json(Abonnement::where("id", "=", $abonnement_id)->first()??["response"=>"not found"]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbonnementRequest  $request
     * @param  int $abonnement_id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbonnementRequest $request, int $abonnement_id)
    {
        $abonnement = Abonnement::where("id", "=", $abonnement_id)->first();
        $validated = $request->validated();
        if($abonnement){
            $abonnement->user_id = $validated["user_id"];
            $abonnement->status = $validated["status"];
            $abonnement->duree = $validated["duree"];
        }else{
            return response()->json(["response"=>"not found"], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abonnement  $abonnement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonnement $abonnement)
    {
        //
    }
}
