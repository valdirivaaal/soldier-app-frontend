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
        try {
            $uri = $this->apiUrl . $endpoint;

            $client = new \GuzzleHttp\Client();

            $res = $client->request('GET', $uri);

            $response = json_decode($res->getBody());

        } catch (\GuzzleHttp\Exception\ServerException $g) {
            $response = [
                'status' => false,
                'message' => json_decode($g->getResponse()->getBody()->getContents())
            ];
        } catch (\Exception $e) {
            $response = [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }

        return $response;
    }
}
