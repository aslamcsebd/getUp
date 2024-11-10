<?php

namespace App\Traits;

trait ApiResponse
{
    /**
     * Send a success JSON response.
     *
     * @param mixed  $data
     * @param string $message
     * @param int    $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse($data = [], $message = 'Operation successful', $code = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    /**
     * Send an error JSON response.
     *
     * @param string $message
     * @param int    $code
     * @param mixed  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($message = 'Operation failed', $code = 400, $errors = [])
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors
        ], $code);
    }
}
