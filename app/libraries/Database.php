<?php

/**
 * PDO Database Class
 * Connect to Db
 * Create prepared statements
 * Bind values
 * Return rows and results
 *
 */

class Database{

    private $host=DB_HOST;
    private $user=DB_USER;
    private $Pass= DB_PASS;
    private $dbname=DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        //set DSN
        $dsn='mysql:host=' . $this->host .';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT=>true,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        );

        //Create PDO Instance
        try{
            $this->dbh = new PDO($dsn,$this->user,$this->Pass,$options);
        }catch (PDOException $e){
            $this->error=$e->getMessage();
            echo $this->error;
        }


    }



}