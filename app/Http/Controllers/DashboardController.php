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

    /**
     * Endpoint for getting Soldier detail chart
     *
     * @return JsonResponse
     */
    public function getSoldierChart($id)
    {
        $data = $this->fetchFromAPI('/dashboard/chart/'.$id);

        return response()->json($data, 200);
    }

    /**
     * Endpoint for getting Soldier positions on maps
     *
     * @return JsonResponse
     */
    public function getSoldierPositions()
    {
        $data = $this->fetchFromAPI('/dashboard/map');

        return response()->json($data, 200);
    }

    /**
     * Endpoint for getting centermap data
     *
     * @return JsonResponse
     */
    public function getCenterMap()
    {
        $data = $this->fetchFromAPI('/dashboard/centermap');

        return response()->json($data, 200);
    }
}
