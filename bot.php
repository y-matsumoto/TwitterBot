<?php
 

require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
 
$conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
 
$msg = date("Y-m-d H:i:s"); 
 
$params = array(
    'status' => $msg . "　テストからメッセージです"
);
 
$result = $conn->post('statuses/update', $params);
 
var_dump($result);