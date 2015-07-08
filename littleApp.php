
<?php
require_once('TwitterAPIExchange.php');
echo "<h2>Simple Twitter API Test</h2>";
echo "<h3>line 2</h3>";
$ht = $_POST["hashtag"];
//echo $ht;
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "3266870948-Ki8WUTtIgdhRcTP1GRS83TnjcDw97Vky94JL8a0",
    'oauth_access_token_secret' => "jYCTAXzD5HjKr4gfMRoUeIKnzB423iOX1OvOBJwRF5RXq",
    'consumer_key' => "b9UgnHoMooJDKGKp6CMGUBBVN",
    'consumer_secret' => "Znsqm821845jxiHCRD2o8lfacCCGET7meJxiEVHkCsfAYYzvjl"
);
$url = 'https://api.twitter.com/1.1/blocks/create.json';
$requestMethod = 'POST';
$postfields = array(
    'screen_name' => 'ankitha', 
    'skip_status' => '1'
);

//error_log($requestMethod);
$twitter = new TwitterAPIExchange($settings);
error_log($ht);
//echo $twitter->get_tweet_list();
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();

?>