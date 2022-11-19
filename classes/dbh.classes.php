<?php

class Dbh {
  
    protected function connect(){
       try{
         $host = "localhost";
         $user = "walid";
         $pwd = "123456";
         $dbName = "ooptut";
        // create var
        $dsn = 'mysql:host='.$host .';dbname='.$dbName;
        // connect to database
        $pdo = new PDO($dsn,$user,$pwd);
        // set att for fetch data as assoc array
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
       }catch(PDOException $e){
         print "Error : " . $e->getMessage() . "<br/>";
         die();
       }

    }
}
