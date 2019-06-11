<?php
require	'vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

$client = new Client();
$guzzleClient = new GuzzleClient(array(
    'timeout' => 60,
));
$client->setClient($guzzleClient);
$crawler = $client->request('GET', 'https://tw.yahoo.com/');


//preg_match_all('/<a[^>]*><span class="Va-tt">([\s\S]*?)<\/span\s*><\/a>/si',$crawler,$match);
$crawler->filter('a > span[class="Va-tt"]')->each(function ($node) {
    print $node->text().'<br>';
});

?>