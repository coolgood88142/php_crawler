<?php
require	'vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

$client = new Client();

$crawler = $client->request('GET', 'https://tw.yahoo.com/');
$i=1;$j=1;

echo '主標題'.'<br>';
$crawler->filter('a > span[class="Va-tt"]')->each(function ($node) {
    print $node->text().'<br>';
});

echo '<br>';

echo '副標題'.'<br>';
$crawler->filter('p > span[class="Va-tt"]')->each(function ($node) {
    print $node->text().'<br>';
});

?>