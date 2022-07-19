<?php

namespace App\Http\Controllers\Api\v1\HumanResources;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmploymentClassifierResource;
use App\Models\EmploymentClassifier;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class EmploymentClassifierController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return AnonymousResourceCollection
   */
  public function index(): AnonymousResourceCollection
  {
    return EmploymentClassifierResource::collection(EmploymentClassifier::all());
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
   * @param EmploymentClassifier $employmentClassifier
   * @return EmploymentClassifierResource
   */
  public function show(EmploymentClassifier $employmentClassifier): EmploymentClassifierResource
  {
    return EmploymentClassifierResource::make($employmentClassifier);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param Request $request
   * @param EmploymentClassifier $employmentClassifier
   * @return Response
   */
  public function update(Request $request, EmploymentClassifier $employmentClassifier)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param EmploymentClassifier $employmentClassifier
   * @return int
   */
  public function destroy(EmploymentClassifier $employmentClassifier): int
  {
    $employmentClassifier->delete();
    return Response::HTTP_NO_CONTENT;
  }
}
