<?php

namespace App\Http\Controllers;

use App\Content\main\HousesInfo;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;



class HousesCardsControllers extends Controller
{

  protected $category;

  public function index()
  {
    try {
      $housesInfo = new HousesInfo();
      $objects = $housesInfo->toArray();
    } catch (Exception $e) {
      return response()->json([
        'data' => [],
        'message' => $e->getMessage()
      ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }
    return response()->json([
      'data' => $objects,
      'message' => 'Succeed'
    ], JsonResponse::HTTP_OK);
  }
  public function store(Request $request)
  {
    try {
      $houses_info = new HousesInfo();
      $data = $houses_info->toArray();
      $this->category = $request->input('house-list');
      $price_start = $request->input('price-start');
      $price_end = $request->input('price-end');
      $square_start = $request->input('square-start');
      $square_end = $request->input('square-end');
      // optical
      if ($request->has('floor')) {
        $floor = $request->input('floor');
      }
      if ($request->has('floor')) {
        $terrace = $request->input('terrace');
      }
      if ($request->has('floor')) {
        $garage = $request->input('garage');
      }

      $objects = (array_filter($data, function ($arr) {
        if ($this->category == 'Все' || $this->category == 'Не выбрано') {
          return $arr;
        }
        return $arr['category'] == $this->category;
      }));
    } catch (Exception $e) {
      return response()->json([
        'data' => [],
        'message' => $e->getMessage()
      ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }
    return response()->json([
      'data' => $objects,
      'message' => 'Succeed'
    ], JsonResponse::HTTP_OK);
  }
}
