<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

use App\Services\SemesterService;
use App\Http\Resources\SemesterResource;
use App\Http\Controllers\Controller;

class SemesterController extends Controller {
  public function __construct(
    protected SemesterService $service
  ) {}

  public function getRecordsAll() {
    try {
      $semesters = $this->service->getAll();

      return SemesterResource::collection($semesters);
    } catch (\Exception $e) {
       return Response::json(['success' => false, 'message' => $e->getMessage()]);
    }
  }

  public function getRecordsBy(string $category) {
    try {
      $semesters = $this->service->getBy($category);

      return SemesterResource::collection($semesters);
    } catch (\Exception $e) {
       return Response::json(['success' => false, 'message' => $e->getMessage()]);
    }
  }
}
