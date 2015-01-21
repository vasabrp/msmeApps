<?php

session_start();
include 'project-report.html.php';

// https://github.com/google/google-api-php-client
// http://stackoverflow.com/questions/26771936/cant-find-google-client-php-in-google-api-php-client-library
require_once $_SERVER['DOCUMENT_ROOT'].'/google-api/autoload.php'; 

$scriptUri = "http://".$_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF'];
$client = new Google_Client();
$client->setAccessType('online'); // default: offline
$client->setApplicationName('kitkat-pandanus');
$client->setClientId('367641634400-9qht8btr0vcc1ki7k3u6qchijgejetsh.apps.googleusercontent.com');
$client->setClientSecret('Dr_Ese0nEoHVXJN8DQ2oyfQk');
$client->setRedirectUri($scriptUri);
$client->setDeveloperKey('AIzaSyDjboLstA0zkBPViSgb4xOg_a3LdUzyNdc'); // API key

$service = new Google_Service_Books($client);
$optParams = array('filter' => 'free-ebooks');
$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

foreach ($results as $item) {
  echo $item['volumeInfo']['title'], "<br /> \n";
}

echo 'Hello, world.';

include $_SERVER['DOCUMENT_ROOT'].'/git/msmeERP/inc/footer.inc.html.php';

?>