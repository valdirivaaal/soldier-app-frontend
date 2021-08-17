<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    /**
     * @var string
     */
    protected $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('app.api_url');
    }

    /**
     * Method for fetching data from outside API
     *
     * @param string $endpoint
     */
    public function fetchFromAPI($endpoint)
    {
        $apiCall = file_get_contents($this->apiUrl . $endpoint);

        $result = $apiCall ? $apiCall : null;

        return json_decode($result, true);
    }
}
