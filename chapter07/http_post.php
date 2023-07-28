<?php
require '../vendor/autoload.php';

$cli = new GuzzleHttp\Client([
    'base_uri' => 'https://wings.msn.to',
]);
$res = $cli->post('/tmp/post.php', [
    'form_params' => [
        'name' => '佐々木新之助'
    ]
]);
print $res->getBody();

/*
[
    {
        "title": "独習PHP 第4版",
        "price": 4000,
        "publisher": "翔泳社"
    }

]
*/