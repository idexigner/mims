<?php

namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\DB;

trait LogExceptions
{
    public function logException(Exception $e, $routeName, $methodName)
    {
        
        // Log the exception in the database
        DB::table('error_logs')->insert([
            'route_name' => $routeName,
            'method_name' => $methodName,
            'message' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'stack_trace' => $e->getTraceAsString(),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        
    }
}