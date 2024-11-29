<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

use App\Services\StrandService;
use App\Http\Resources\StrandResource;
use App\Http\Controllers\Controller;

class StrandController extends Controller {
  public function __construct(
    protected StrandService $service
  ) {}

  public function getRecordsAll() {
    try {
      $strands = $this->service->getAll();

      return StrandResource::collection($strands);
    } catch (\Exception $e) {
       return Response::json(['success' => false, 'message' => $e->getMessage()]);
    }
  }

}
