<?php

namespace App\Libraries\NewsApi;

use GuzzleHttp\Client;

class NewsApi {
    
    protected $key;
    protected $url;
    protected $client;

    /**
     * [__construct description]
     * @param [type] $key    [description]
     * @param [type] $url    [description]
     * @param Client $client [description]
     */
    public function __construct($key, $url, Client $client) {

        $this->key = $key;
        $this->url = $url;
        $this->client = $client;
    }


    /**
     * [getArticles description]
     * @param  [type] $source [description]
     * @return [type]         [description]
     */
    public function getArticles($source) {

        $response = $this->request('/top-headlines', ['sources' => $source])->getBody()->getContents();
        
        return json_decode($response, true);
    }


    /**
     * [request description]
     * @param  [type] $endpoint [description]
     * @param  array  $data     [description]
     * @return [type]           [description]
     */
    protected function request($endpoint, array $data = []) {

        $data = $data + ['apiKey' => $this->key];

        $url = $this->url . $endpoint . '?' . http_build_query($data);

        return $this->client->request('GET', $url);
    }

}