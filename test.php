<?php

header('Content-Type: text/html; charset=utf-8');
/*
$videoUrl = "https://www.googleapis.com/youtube/v3/videos?id=yIx6uTu3dfQ&key=AIzaSyDchpgAuDdzMkLIYicgs_QcZ-vPZINwPXI&part=snippet";
$json = file_get_contents($videoUrl);

print_r("<pre>");
$item = json_decode($json);
print_r($item->items[0]->id);
print_r("<br/>");

print_r($item->items[0]->snippet->title);
print_r("<br/>");
print_r($item);
print_r("</pre>");
 * */

$url = "https://www.youtube.com/watch?v=NnCrzYKFEBo";
print_r("<pre>");
print_r(explode('=', parse_url($url)['query'])[1]);
print_r("</pre>");


?>