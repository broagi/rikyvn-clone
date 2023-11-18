<?php

namespace App\Helper;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

use function response;

class DataResponse {
  public static function ok($data, $code = 200): JsonResponse {
		return response()->json(["data" => $data, "status" => $code]);
  }

  public static function fail($data, $code = 400): JsonResponse {
		return response()->json(["data" => $data, "status" => $code]);
  }
}

?>