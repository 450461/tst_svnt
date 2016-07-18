<?php
class main
{
    function show()
    {
        return    ['content'=>__DIR__.DIRECTORY_SEPARATOR.'content.html',
                    'pageTitle'=>'ГЛАВНАЯ СТРАНИЦА',        
                    'title'=>'Перейти на  <br> страницу конфигуратора',
                    'linkTo'=>'config',
                    'link'=>'/',
                    'menu'=>__DIR__.DIRECTORY_SEPARATOR.'menu.php',
                    'footer'=>__DIR__.DIRECTORY_SEPARATOR.'footer.php'
        ];
    }
}