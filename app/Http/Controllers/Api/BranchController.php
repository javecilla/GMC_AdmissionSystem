<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

use App\Services\BranchService;
use App\Http\Resources\BranchResource;
use App\Http\Controllers\Controller;

class BranchController extends Controller {
  public function __construct(
    protected BranchService $service
  ) {}

  public function getRecordsAll() {
    try {
      $branches = $this->service->getAll();

      return BranchResource::collection($branches);
    } catch (\Exception $e) {
       return Response::json(['success' => false, 'message' => $e->getMessage()]);
    }
  }

  public function getRecordsBy(string $category) {
    try {
      $branches = $this->service->getBy($category);

      return BranchResource::collection($branches);
    } catch (\Exception $e) {
       return Response::json(['success' => false, 'message' => $e->getMessage()]);
    }
  }

}
