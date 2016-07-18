<?php
class config
{
    function show()
    {
        return    ['content'=>__DIR__.DIRECTORY_SEPARATOR.'content.html',
                    'pageTitle'=>'КОНФИГУРАТОР',
                    'title'=>'Перейти на  <br> главную страницу',
                    'linkTo'=>'/',
                    'link'=>'',
                    'menu'=>__DIR__.DIRECTORY_SEPARATOR.'menu.php',
                    'footer'=>__DIR__.DIRECTORY_SEPARATOR.'footer.php'
        ];
    }
}