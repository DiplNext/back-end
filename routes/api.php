<?php

use App\Http\Controllers\Api\v1\HumanResources\DepartmentController;
use App\Http\Controllers\Api\v1\HumanResources\DepartmentTypeController;
use App\Http\Controllers\Api\v1\HumanResources\StaffStructureController;
use App\Models\EmploymentClassifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

/*
 * Api V1 Routes
 */

Route::group(['prefix' => 'v1'], function () {
  Route::group(['prefix' => 'human-resources'], function () {
    Route::resource('department-types', DepartmentTypeController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('staff-structures', StaffStructureController::class);
    Route::resource('employment-classifiers', EmploymentClassifier::class);
  });
});
