<?php
require_once __DIR__ . '/vendor/autoload.php';

$configs = include('config.php');

$fb = new Facebook\Facebook([
  'app_id' => $configs['app_id'],
  'app_secret' => $configs['app_secret'],
  'default_graph_version' => $configs['default_graph_version'],
  ]);

echo 'Insert any access token for testing: ';
$token = trim(fgets(STDIN));

echo "\n";
$user = $fb->get('/me', $token)->getGraphUser();
print_r(json_decode($user->asJson()));
echo "\n";
