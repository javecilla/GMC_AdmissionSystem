<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

use App\Services\SchoolYearService;
use App\Http\Resources\SchoolYearResource;
use App\Http\Controllers\Controller;

class SchoolYearController extends Controller {
  public function __construct(
    protected SchoolYearService $service
  ) {}

  public function getRecordsAll() {
    try {
      $schoolYears = $this->service->getAll();

      return SchoolYearResource::collection($schoolYears);
    } catch (\Exception $e) {
       return Response::json(['success' => false, 'message' => $e->getMessage()]);
    }
  }
}
