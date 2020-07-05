<?php

namespace App\Http\Controllers;

class HealthCheckController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    public function health() {
        return response()->json(['status' => 'ok'], 200);
    }

    public function info()
    {
        $info['ms-name'] = 'dispenser';
        $info['memory_usage'] = memory_get_usage(true);
        $info['cpu_usage'] = sys_getloadavg()[0];

        return response()->json($info, 200);
    }
}
