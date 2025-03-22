<?php

use Abdulbaset\ZoomIntegration\ZoomIntegrationService;

require __DIR__ . '/vendor/autoload.php';

$account_id = 'HwP5kzrTTIqY685_2y-ufA';
$client_id = 'WxsluAS9QNu60kbd8bHjQ';
$client_secret = 'sxhSdiJGFpIpBlyh60TqW0E14pSh8Zim';

$zoom = new ZoomIntegrationService($account_id, $client_id, $client_secret);

// ISO 8601 date format
// $start_time = date('Y-m-d\TH:i:s', strtotime('2024-11-04 17:00'));

// $meetingData = [
//     'topic' => 'Update Meeting',
//     'type' => 2,
//     'start_time' => $start_time,
//     'duration' => 30,
//     'timezone' => 'UTC',
//     'genda' => 'Discuss Project',
// ];

$id = 86175169848;

echo '<pre>';
echo print_r($zoom->getMeeting($id));
echo '</pre>';