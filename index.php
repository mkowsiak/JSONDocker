<?php
$myPage_1 -> url    = "http://jnicookbook.owsiak.org";
$myPage_1 -> topic  = "JNI Cookbook";
$myPage_1 -> rating = "5";

$myPage_2 -> url    = "http://www.owsiak.org";
$myPage_2 -> topic  = "Personal blog";
$myPage_2 -> rating = "6";

$myPage_3 -> url    = "http://mutemymic.owsiak.org";
$myPage_3 -> topic  = "Mute My Mic";
$myPage_3 -> rating = "4";

$pages = array($myPage_1, $myPage_2, $myPage_3);
$response = [
    "collection" => $pages
];

$myJSON = json_encode($response);

echo $myJSON;
?>
