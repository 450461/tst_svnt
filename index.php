<?php
header('Content-Type: text/html; charset=utf-8');	
const BASE_DIR=__DIR__;
require BASE_DIR.DIRECTORY_SEPARATOR.'inc'. DIRECTORY_SEPARATOR.'autoload.php';
const URI_SEPARATOR = '/';
$url=trim($_SERVER['REQUEST_URI'], URI_SEPARATOR);
$site= new site();
if (empty($url)	|| $url=='index.php') {
        $id='main';
    } else {
        $id=$url;
    };
$content=new $id;
$returnArray=$content->show();
$site->body($returnArray);