<?php
$list = array();


//prepare data
$list[0] = new stdClass();
$list[0]->username = "usernam1";
$list[0]->password = "pas 1";

$list[1] = new stdClass();
$list[1]->username = "usernam2";
$list[1]->password = "pas 2";

$list[2] = new stdClass();
$list[2]->username = "usernam3";
$list[2]->password = "pas 3";


//set POST variables
$url = 'http://127.0.0.1/bai1/testcurl/process.php';
$fields = array(
    'username' => urlencode($list[0]->username),
    'paswword' => urlencode($list[0]->password),

);

//url-ify the data for the POST
$fields_string = '';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);


//return value here
var_dump($result); exit;

//close connection
curl_close($ch);

