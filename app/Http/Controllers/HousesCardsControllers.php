<?php

namespace App\Http\Controllers;

use App\Content\main\HousesInfo;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;



class HousesCardsControllers extends Controller
{

  protected string $category;
  public function store(Request $request)
  {
    try {
        $filtered = [];
        foreach (HousesInfo::filter($request->all()) as $item){
            $filtered[] = $item;
        }
    } catch (Exception $e) {
      return response()->json([
        'data' => [],
        'message' => $e->getMessage()
      ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }
    return response()->json([
      'data' => $filtered,
      'message' => 'Succeed'
    ], JsonResponse::HTTP_OK);
  }
}
