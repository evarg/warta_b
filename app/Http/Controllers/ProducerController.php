<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use App\Http\Requests\StoreProducerRequest;
use App\Http\Requests\UpdateProducerRequest;
use Illuminate\Http\Resources\Json\JsonResource;

class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new JsonResource (Producer::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProducerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducerRequest $request)
    {
        $producer = new Producer($request->all());
        $producer->save();
        return new JsonResource($producer, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function show(Producer $producer)
    {
        return new JsonResource ($producer, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProducerRequest  $request
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProducerRequest $request, Producer $producer)
    {
        $producer->update($request->all());;
        return new JsonResource($producer, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producer  $producer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producer $producer)
    {
        $producer->delete();
        return new JsonResource(null, 201);
    }
}
