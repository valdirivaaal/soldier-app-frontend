<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('dashboard.content');
    }

    /**
     * Endpoint for getting Soldier data
     *
     * @return JsonResponse
     */
    public function getDataSoldier(): JsonResponse
    {
        $data = $this->fetchFromAPI('/device');

        return response()->json($data, 200);
    }

    /**
     * Endpoint for getting Soldier detail data
     *
     * @return JsonResponse
     */
    public function getSoldierDetail($id)
    {
        $data = $this->fetchFromAPI(('/dashboard/'.$id));

        return response()->json($data, 200);
    }
}
