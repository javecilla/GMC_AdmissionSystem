<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

use App\Services\YearLevelService;
use App\Http\Resources\YearLevelResource;
use App\Http\Controllers\Controller;

class YearLevelController extends Controller {
  public function __construct(
    protected YearLevelService $service
  ) {}

  public function getRecordsAll() {
    try {
      $yearLevels = $this->service->getAll();

      return YearLevelResource::collection($yearLevels);
    } catch (\Exception $e) {
       return Response::json(['success' => false, 'message' => $e->getMessage()]);
    }
  }

  public function getRecordsBy(string $category) {
    try {
      $yearLevels = $this->service->getBy($category);

      return YearLevelResource::collection($yearLevels);
    } catch (\Exception $e) {
       return Response::json(['success' => false, 'message' => $e->getMessage()]);
    }
  }
}
