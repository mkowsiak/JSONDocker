<?php
$myPage -> title    = "slow";
$myPage -> message  = "it took me 5 sec. to get here";

$pages = array($myPage);
$response = [
    "content" => $pages
];

$myJSON = json_encode($response);

sleep(5);

echo $myJSON;
?>
