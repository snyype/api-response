<?php

namespace snype\ApiResponse;

class ApiResponse
{
    public static function success($data = [], $message = 'Operation successful', $status = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ], $status);
    }

    public static function error($message = 'Operation failed', $status = 400, $errors = [])
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors'  => $errors,
        ], $status);
    }
}
