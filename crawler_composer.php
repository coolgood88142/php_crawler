<?php
require	'vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

$client = new Client();

$crawler = $client->request('GET', 'https://tw.yahoo.com/');
$i=1;$j=1;

$link = $crawler->filter('a > span[class="Va-tt"]')->each(function ($node) {
    return $node->text();
});

$subtitle = $crawler->filter('p > span[class="Va-tt"]')->each(function ($node) {
    return $node->text();
});

$title = array($link,$subtitle);
?>