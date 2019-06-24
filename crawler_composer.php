<?php
require	'vendor/autoload.php';

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

try{
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
	
	
	$nav1 = $crawler->filter('span > i[class=" D-ib W-100"]')->each(function ($node) {
		return $node->text();
	});
	
	$nav2 = $crawler->filter('span > i[class="separator D-ib W-100"]')->each(function ($node) {
		return $node->text();
	});
	
	$category = array($nav1[0]);
	$nav2_count = count($nav2);
	
	for($i=0;$i<$nav2_count;$i++){
		array_push($category,$nav2[$i]);
	}
	
	$title_url = $crawler->filter('span[class="D-b Fl-end Pos-r Ov-h"] > a')->each(function ($node) use ($crawler){
		$hrefText = trim($node->text());
		$link = $crawler->selectLink($hrefText)->link();
		return $url = $link->getUri();
	});
	
}catch(Exception $e){
	echo "讀取時間過長";
}

?> 