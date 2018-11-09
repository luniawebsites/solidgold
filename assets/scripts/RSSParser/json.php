<?php
set_time_limit(0);
$url = $_POST['url'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$cn = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if ($status == 200) {
	$feeds = file_get_contents($url);
  $feeds = str_replace("<content:encoded>","<ContentEncoded>",$feeds);
  $feeds = str_replace("</content:encoded>","</ContentEncoded>",$feeds);
	$xml_json = simplexml_load_string($feeds, 'SimpleXMLElement', LIBXML_NOCDATA);
	//$xml_json = simplexml_load_file($url, 'SimpleXMLElement', LIBXML_NOCDATA);
}
else {
	$xml_json = "failure";
}
curl_close($ch);
header('Content-type: application/json');
echo json_encode($xml_json, true);
?>
