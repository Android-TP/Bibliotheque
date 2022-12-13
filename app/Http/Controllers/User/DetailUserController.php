<?php

namespace App\Http\Controllers\User;

use App\Models\Detail_user;
use App\Http\Requests\StoreDetail_userRequest;
use App\Http\Requests\UpdateDetail_userRequest;
use App\Http\Controllers\Controller;

class DetailUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response()->json(Detail_user::all());
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
     * @param  \App\Http\Requests\StoreDetail_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetail_userRequest $request)
    {
        $requette = $request->all();
        if ($request->hasFile('image')) {
            $requette["image"] = str_replace("users/images/", "", $request->image->store('users/images'));
            }
        return response()->json(Detail_user::create($requette));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_user $detail_user)
    {
       return response()->json($detail_user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_user $detail_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetail_userRequest  $request
     * @param  \App\Models\Detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetail_userRequest $request, Detail_user $detail_user)
    {
        $validated = $request->validated();
        $detail_user->user_id = $validated["user_id"];
        $detail_user->matricule = $validated["matricule"];
        $detail_user->description = $validated["description"];
        if ($request->hasFile('image')) {
            $detail_user->image = str_replace("users/images/", "", $request->image->store('users/images'));
            }
        $detail_user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_user  $detail_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_user $detail_user)
    {
        $detail_user->delete();
        return response()->json(["response"=>"success"]);
    }
}
