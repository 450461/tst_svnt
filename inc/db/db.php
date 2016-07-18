<?php
class db
{
    const SELECT_ON='SELECT * FROM `widjets` WHERE `state`=\'on\' ORDER BY `psn`';
    const SELECT_ALL='SELECT * FROM `widjets` ORDER BY `menu_label`';
    const SELECT_CONTENT='SELECT `menu_label` FROM `widjets` WHERE `label`=';
    const SET_OFF='UPDATE `widjets` SET `state`="off" WHERE `label`=';
    const SET_ON='UPDATE `widjets` SET `state`="ON" WHERE `label`=';
    private static $connection;
    const DBHOST='localhost';    //хост базы
    const DB='tst_svnt';    //база данных
    const USER='root';    //пользователь
    const PSWD='';    //пароль
    
    private static function connectionToDB()
    {
        if (self::$connection) return self::$connection;
        self::$connection= new mysqli(self::DBHOST, self::USER, self::PSWD, self::DB);
        self::$connection->set_charset('utf8');
       return    self::$connection;    
    }
    public static function getON()
    {
        return     self::connectionToDB()->query(self::SELECT_ON);
    }
    public static function getALL()
    {
        return self::connectionToDB()->query(self::SELECT_ALL);
    }
    public static function getContent($id)
    {
        return self::connectionToDB()->query(self::SELECT_CONTENT."'$id'")->fetch_array(MYSQLI_ASSOC);
    }
    public static function setON($id)
    {
        self::connectionToDB()->query(self::SET_ON."'$id'");
    }
    public static function setOFF($id)
    {
        self::connectionToDB()->query(self::SET_OFF."'$id'");
    }
}