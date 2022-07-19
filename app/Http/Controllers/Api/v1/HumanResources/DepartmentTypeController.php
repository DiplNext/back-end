<?php

namespace App\Http\Controllers\Api\v1\HumanResources;

use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentTypeResource;
use App\Models\DepartmentType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class DepartmentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return DepartmentTypeResource::collection(DepartmentType::withTrashed()->get());
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
     * @param DepartmentType $departmentType
     * @return DepartmentTypeResource
     */
    public function show(DepartmentType $departmentType): DepartmentTypeResource
    {
        return DepartmentTypeResource::make($departmentType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param DepartmentType $departmentType
     * @return Response
     */
    public function update(Request $request, DepartmentType $departmentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DepartmentType $departmentType
     * @return int
     */
    public function destroy(DepartmentType $departmentType): int
    {
        $departmentType->delete();
        return Response::HTTP_NO_CONTENT;
    }
}
