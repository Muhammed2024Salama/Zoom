<?php

use Abdulbaset\ZoomIntegration\ZoomIntegrationService;

require __DIR__ . '/vendor/autoload.php';

$account_id = 'HwP5kzrTTIqY685_2y-ufA';
$client_id = 'WxsluAS9QNu60kbd8bHjQ';
$client_secret = 'sxhSdiJGFpIpBlyh60TqW0E14pSh8Zim';

$zoom = new ZoomIntegrationService($account_id, $client_id, $client_secret);

echo '<pre>';
echo print_r($zoom->getUser());
echo '</pre>';