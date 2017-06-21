<?php

namespace App\Libraries\NewsApi;

use GuzzleHttp\Client;

class NewsApi {
    protected $key;
    protected $url;
    protected $client;

    public function __construct($key, $url, Client $client) {
        $this->key = $key;
        $this->url = $url;
        $this->client = $client;
    }

    public function getSources() {
        $response = $this->request('/sources')->getBody()->getContents();

        return json_decode($response, true);
    }

    public function getArticles($source) {
        $response = $this->request('/articles', ['source' => $source])->getBody()->getContents();

        return json_decode($response, true);
    }

    protected function request($endpoint, array $data = []) {
        $data = $data + ['apiKey' => $this->key];

        $url = $this->url . $endpoint . '?' . http_build_query($data);

        return $this->client->request('GET', $url);
    }

}