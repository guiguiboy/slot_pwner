<?php
/**
 * Created by PhpStorm.
 * User: guigui
 * Date: 04/12/2018
 * Time: 22:09
 */

require_once __DIR__ . '/../vendor/autoload.php';

$mysecretEndpoint = '';

for($i = 5; $i <= 15; $i++) {
    $client = new \GuzzleHttp\Client();
    $response = $client->request('POST', $mysecretEndpoint,
        [
            'form_params' => [
                'user_registration[cguClient]' => 'true',
                'user_registration[email]' => sprintf('carrefour-plop%d@yopmail.com', $i),
                'user_registration[firstName]' => 'Carrefour',
                'user_registration[lastName]' => 'plop',
                'user_registration[gender]' => 'Monsieur',
                'user_registration[password]' => '123456789/A',
            ]
        ]);
    print_r($response->getBody()->getContents());
}

//last counter 15