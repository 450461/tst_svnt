<?php
function autoloadModel($id)
{
    //include $id.DIRECTORY_SEPARATOR.$id.'.php';
    include __DIR__.DIRECTORY_SEPARATOR.$id.DIRECTORY_SEPARATOR.$id.'.php';
}
spl_autoload_register('autoloadModel');