<?php namespace Nticaric\Majestic;

use GuzzleHttp\Client;

class MajesticAPIService {

    private $endpoint = "http://api.majestic.com/api/";
    
    public function __construct($apiKey, $sandbox = false)
    {
        if($sandbox == true) {
            $this->endpoint = "http://developer.majestic.com/api";
        }
        $this->responseType = "json";
        $this->apiKey = $apiKey;
    }

    public function executeCommand($command, $params)
    {
        $client = new Client;

        $params["cmd"]         = $command;
        $params["app_api_key"] = $this->apiKey;

        return $client->get($this->endpoint ."/". $this->responseType, [
            'query' => $params
        ]);
    }
}