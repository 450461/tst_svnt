<?php
require_once 'autoload.php';
$id=$_POST['id'];
db::setON($id);
site::configMenu();