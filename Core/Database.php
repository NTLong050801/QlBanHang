<?php
class Database
{
    const HOST = 'localhost';
    const USERNAME = 'root'; 
    const DB_NAME = 'qlbh';
    const PASSWORD = '';
    const URL = "http://localhost/clothes/";
    // URL: =
    private  $connect;
    public function connect(){
        $connect = mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DB_NAME);
        mysqli_set_charset($connect,"utf8");
        if(mysqli_connect_errno()==0){
            return $connect;
        }
         return false;
    }
}