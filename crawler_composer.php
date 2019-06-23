<?php
require	'vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

try{
	$title[0] = array();
	$title[1] = array();

	$client = new Client();
	$client = new GuzzleClient(array(
	    'timeout' => 60,
	));

	$crawler = $client->request('GET', 'https://tw.yahoo.com/');
	$i=1;$j=1;

	$link = $crawler->filter('<span class="D-b Fl-end Pos-r Ov-h"]')->each(function ($node) {
	    return $node->text();
	});

	$subtitle = $crawler->filter('p > span[class="Va-tt"]')->each(function ($node) {
	    return $node->text();
	});

	$title = array($link,$subtitle);

}catch(Exception $e){
	echo "讀取時間過長";
}
?>