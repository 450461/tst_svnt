<?php
require_once 'autoload.php';
$id=$_POST['id'];
db::getContent($id);
$content=new $id;
$returnArray=$content->show($id);
echo '<h3>'.$returnArray['title']['menu_label'].'</h3>';
include $returnArray['content'];