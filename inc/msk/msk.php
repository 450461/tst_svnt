<?php
class msk
{
    function show($id)
    {
        return ['content'=>__DIR__.DIRECTORY_SEPARATOR.'content.html',
                                'title'=>db::getContent($id)
                            ];
    }
}