<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\LogApp;
use App\Models\LogDevice;
use Illuminate\Http\Request;
use Throwable;

class LoggsController extends Controller
{
    public function store(Request $request)
    {
        try {

            $log = Log::create([
                "headers" => json_encode($request->headers->all()),
                "message" => request("message") ?? null
            ]);

            LogApp::create([
                "log_id" => $log->id,
                "version" => request("version") ?? null,
                "web_service_version" => request("web_service_version") ?? null,
                "database_version" => request("database_version") ?? null
            ]);

            LogDevice::create([
                "log_id" => $log->id,
                "brand" => request("brand") ?? null,
                "model" => request("model") ?? null,
                "ram" => request("ram") ?? null,
                "disk" => request("disk") ?? null,
                "os" => request("os") ?? null,
                "os_version" => request("os_version") ?? null
            ]);
        } catch (Throwable $e) {
            response([
                "message" => $e->getMessage()
            ], 400);
        }

        return response([
            "message" => "logs saved successfully"
        ], 200);
    }
}
