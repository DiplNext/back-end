<?php

namespace App\Http\Controllers\Api\v1\HumanResources;

use App\Http\Controllers\Controller;
use App\Http\Resources\StaffStructureResource;
use App\Models\StaffStructure;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class StaffStructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return StaffStructureResource::collection(StaffStructure::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param StaffStructure $staffStructure
     * @return StaffStructureResource
     */
    public function show(StaffStructure $staffStructure): StaffStructureResource
    {
        return StaffStructureResource::make($staffStructure);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param StaffStructure $staffStructure
     * @return Response
     */
    public function update(Request $request, StaffStructure $staffStructure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StaffStructure $staffStructure
     * @return int
     */
    public function destroy(StaffStructure $staffStructure): int
    {
        $staffStructure->delete();
        return Response::HTTP_NO_CONTENT;
    }
}
