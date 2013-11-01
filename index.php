<?php

//$url = "http://www.mangasproject.net/Lista/mangas/1-naruto";
//$ch = curl_init($url);

//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_USERAGENT,
    //'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

//$result = curl_exec($ch);

//curl_close($ch);
//var_dump($result);

//$DOM = new DOMDocument;
//$DOM->loadHTML($result);
//var_dump($DOM);

//$query = '//*[@id="chaplist"]';

//$xpath = new DOMXPath($DOM);
//$result = $xpath->query($query);
//var_dump($result);
//var_dump($result->item(0));

//foreach ($result->item(0)->getElementsByTagName('a') as $node) {
////    var_dump(trim($node->getAttribute('href')));
    ////var_dump(trim($node->nodeValue));
//}


$url = "http://www.mangasproject.net/Online/naruto-capitulo-644/46937-scansproject#9";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT,
    'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

$result = curl_exec($ch);

curl_close($ch);
var_dump($result);

$DOM = new DOMDocument;
@$DOM->loadHTML($result);
//var_dump($DOM);

$result = $DOM->getElementsByTagName('img');
var_dump($result->item(0)->getAttribute('src'));

$query = '/html/body/div[4]/div[4]/center/table/tbody/tr/td[2]/div/img';
$xpath = new DOMXPath($DOM);
$result = $xpath->query($query);
var_dump($result->length);
//var_dump($result->item(0));

foreach ($result as $node) {
    var_dump(trim($node));
    var_dump(trim($node->nodeValue));
}
