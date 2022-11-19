<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Http\Requests\StoreBuildingRequest;
use App\Http\Requests\UpdateBuildingRequest;
use Illuminate\Http\Resources\Json\JsonResource;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new JsonResource(Building::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuildingRequest $request)
    {
        $building = new Building($request->all());
        $building->save();
        return new JsonResource($building, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $building
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
        return new JsonResource($building, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMaterialRequest  $request
     * @param  \App\Models\Material  $building
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuildingRequest $request, Building $building)
    {
        $building->update($request->all());;
        return new JsonResource($building, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        $building->delete();
        return new JsonResource(null, 201);
    }
}
