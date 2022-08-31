<?php

namespace App\Http\Controllers\Api\v1\HumanResources;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class DepartmentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return AnonymousResourceCollection
   */
    public function index(): AnonymousResourceCollection
    {
        return DepartmentResource::collection(Department::all());
    }

  /**
   * Store a newly created resource in storage.
   *
   * @param DepartmentRequest $request
   * @return DepartmentResource
   */
    public function store(DepartmentRequest $request): DepartmentResource
    {
        $department = Department::create($request->validated());
        return DepartmentResource::make($department);
    }

  /**
   * Display the specified resource.
   *
   * @param Department $department
   * @return DepartmentResource
   */
    public function show(Department $department): DepartmentResource
    {
        return DepartmentResource::make($department);
    }

  /**
   * Update the specified resource in storage.
   *
   * @param DepartmentRequest $request
   * @param Department $department
   * @return DepartmentResource
   */
    public function update(DepartmentRequest $request, Department $department): DepartmentResource
    {
        $department->update($request->validated());
        return DepartmentResource::make($department);
    }

  /**
   * Remove the specified resource from storage.
   *
   * @param Department $department
   * @return Response
   */
    public function destroy(Department $department): int
    {
        $department->delete();
        return Response::HTTP_NO_CONTENT;
    }
}
