<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{

    /**
     * @param int $status
     * @param $data
     * @param null $message
     * @return \Illuminate\Http\JsonResponse
     */
    public function jsonResponse($data = null, $status = 200, $message = null)
    {
        return response()->json([
            'status' => $status,
            'data' => $data,
            'message' => $message,
        ]);
    }
}
