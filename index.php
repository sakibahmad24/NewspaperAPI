
<?php


$format = "json";

$url = "https://content.guardianapis.com/search?&format=$format&api-key=4c9ce24c-afaf-4769-9c27-1ee87e40c9cf";

//$url = "https://content.guardianapis.com/search?q=12%20years%20a%20slave&format=$format&tag=film/film,tone/reviews&from-date=2010-01-01&show-tags=contributor&show-fields=starRating,headline,thumbnail,short-url&order-by=relevance&api-key=test";

$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, $url); 

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
$content = trim(curl_exec($ch));
curl_close($ch);

echo "<pre>";
$data = json_decode($content);
var_dump($data);



?>