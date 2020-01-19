<?php

namespace Chatbox\CONTROL ;
class Connect{

    const HOST="localhost";
    const DB = "chatbox";
    const USER = "root";
    const PASSWORD = " ";

    public function connection(){
        try{
        $dbConnect = new PDO('mysql:host='.self::HOST.';dbname='.self::DB.'\'',self::USER,self::PASSWORD);
        return $dbConnect;
        }catch(PDOException $e){
            print $e->getMessage()."<br>";
            die();
        }
    }

    


}