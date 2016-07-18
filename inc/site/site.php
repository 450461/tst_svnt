<?php
class Site
{
    private static $i;
    private static $colorConfig;
    public static  function menu()
    {
        $objectMenu=db::getON();
        while ($val=$objectMenu->fetch_array(MYSQLI_ASSOC)) {
            self::$i++;
            echo '    <div class="col-md-3" >
                        <div class="thumbnail" id="self::$i">
                            <br>
                            <a onclick="getContent(\''.$val['label'].'\')">'.$val['menu_label'].'
                            </a>
                            <br>
                            <br>
                            <img width="50px" src="inc'.DIRECTORY_SEPARATOR.$val['label'].DIRECTORY_SEPARATOR.$val['label'].'.jpg">
                            <br>'.self::$i.'
                        </div>
                       </div>
                ';
        }
    }
    PUBLIC function body($returnArray)
    {
        require __DIR__.DIRECTORY_SEPARATOR.'body.html';
    }
    public static function configMenu()
    {
        $objectConfig=db::getALL();
        while($val=$objectConfig->fetch_array(MYSQLI_ASSOC)) {
            self::$i++;
            if ($val['state']=='on') {
                   self::$colorConfig='green';
            } else {
                self::$colorConfig='red';
            };
            echo '<li ><div class='.self::$colorConfig.'>'.$val['menu_label'].'</div>
                    <button onclick="on(\''.$val['label'].'\')">вкл</button>
                    <button onclick="off(\''.$val['label'].'\')">выкл</button><br><br>
                </li>';
        }
    }
    public function sum()
    {
           return self::$i;
    }
}