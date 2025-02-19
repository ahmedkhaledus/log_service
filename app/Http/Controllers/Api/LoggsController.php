<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogStoreRequest;
use App\Models\Log;
use App\Models\LogApp;
use App\Models\LogAppUser;
use App\Models\LogClient;
use App\Models\LogDevice;
use Illuminate\Http\Request;
use Throwable;
use Validator;

class LoggsController extends Controller
{
    public function store(LogStoreRequest $request)
    {
        // return $request->all();

        try {

            $log = Log::create([
                "headers" => json_encode($request->headers->all()),
                "message" => json_encode([$request->message]),
                "source_type" => $request->source_type
            ]);

            $logClient = LogClient::create([
                "log_id" => $log->id,
                "client_id" => $request->client['id'],
                "name" => $request->client['name'],
                "support_branch" => $request->client['support_branch'],
                "country" => $request->client['country'],
            ]);

            LogAppUser::create([
                "app_user_id" => $request->app_user['id'],
                "name" => $request->app_user['name'],
                "log_client_id" => $logClient->id
            ]);

            LogApp::create([
                "log_id" => $log->id,
                "app_version" => $request->app_version,
                "web_service_version" => $request->web_service_version,
                "database_version" => $request->database_version,
                "back_office_version" => $request->back_office_version,
                "app_id" => $request->app_id,
                "app_name" => $request->app_name
            ]);

            LogDevice::create([
                "log_id" => $log->id,
                "brand" => $request->brand,
                "model" => $request->model,
                "ram" => $request->ram,
                "disk" => $request->disk,
                "os" => $request->os,
                "os_version" => $request->os_version
            ]);
        } catch (Throwable $e) {
            return response([
                "status" => false,
                "message" => $e->getMessage()
            ], 400);
        }

        return response([
            "status" => true,
            "message" => "logs saved successfully"
        ], 200);
    }
}
