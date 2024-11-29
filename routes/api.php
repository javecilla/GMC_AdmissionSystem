<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\SchoolYearController;
use App\Http\Controllers\Api\SemesterController;
use App\Http\Controllers\Api\BranchController;
use App\Http\Controllers\Api\YearLevelController;
use App\Http\Controllers\Api\StrandController;
use App\Http\Controllers\Api\StudentController;

Route::middleware('api')->group(function () {
	Route::middleware('guest')->group(function () {
		Route::get('/school-years', [SchoolYearController::class, 'getRecordsAll']);

		Route::get('/semesters', [SemesterController::class, 'getRecordsAll']);
		Route::get('/semesters/campus-category/{category}', [SemesterController::class, 'getRecordsBy']);

		Route::get('/branches', [BranchController::class, 'getRecordsAll']);
		Route::get('/branches/campus-category/{category}', [BranchController::class, 'getRecordsBy']);

		Route::get('/year-levels', [YearLevelController::class, 'getRecordsAll']);
		Route::get('/year-levels/campus-category/{category}', [YearLevelController::class, 'getRecordsBy']);

		Route::get('/strands', [StrandController::class, 'getRecordsAll']);

		Route::post('/student/register', [StudentController::class, 'register']);
	});
});


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
