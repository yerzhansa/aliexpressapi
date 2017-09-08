<?php

namespace AliExpressApi;

use GuzzleHttp\Client;

class AliExpress
{
    const BASE_URI = 'http://gw.api.alibaba.com/';

    const API_URI = 'openapi/param2/2/portals.open';

    public $fields;

    public $appKey;

    public function setFields(string $fields)
    {
        $this->fields = $fields;
    }

    public function setAppKey(int $appKey)
    {
        $this->appKey = $appKey;
    }

    public function getListPromotionProduct($keys)
    {
        $client = new Client(['base_uri' => self::BASE_URI]);

        $method = 'api.listPromotionProduct';

        $response = $client->post(self::API_URI . "/$method/$this->appKey", [
            'query' => [
                'fields' => $this->fields,
                'keywords' => $keys,
                'language' => 'ru',
                'localCurrency' => 'RUB',
//                'sort' => 'volumeDown',
            ]
        ]);

        $body = $response->getBody();

        $result = json_decode($body, true);

        return $result;
    }
}