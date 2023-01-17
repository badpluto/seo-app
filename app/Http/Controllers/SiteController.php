<?php

namespace App\Http\Controllers;

use app\Clients\RestClient;
use app\Clients\RestClientException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function send(Request $request): JsonResponse
    {
        $result = [];
        $api_url = 'https://api.dataforseo.com/';

        $client = new RestClient($api_url, config('services.dfs_token'));
        try {
            $result = $client->post('/v3/backlinks/backlinks/live', $request->target);
//            print_r($result);
            // do something with post result
        } catch (RestClientException $e) {
            echo "n";
            print "HTTP code: {$e->getHttpCode()}n";
            print "Error code: {$e->getCode()}n";
            print "Message: {$e->getMessage()}n";
            print  $e->getTraceAsString();
            echo "n";
        }
        return $result;
        $client = null;

    }
}
