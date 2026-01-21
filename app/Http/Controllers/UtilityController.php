<?php

namespace Homelen\Http\Controllers;

use Homelen\Models\Utility;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class UtilityController extends BaseController
{
    public function main(Request $request): JsonResponse
    {
        return response()->json(['status' => 200]);
    }

    public function list(Request $request): JsonResponse
    {
        return response()->json(['status' => 200, 'data' => Utility::all()->toArray()]);
    }
}
