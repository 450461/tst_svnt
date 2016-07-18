<?php
require_once 'autoload.php';
$id=$_POST['id'];
db::setOFF($id);
site::configMenu();