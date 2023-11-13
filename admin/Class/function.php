<?php

class  blogApp{
    public function __construct(){
        //  database user  pass name and host

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = "blogapp";

        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$this->conn){
            die("can not connect to database");
        }
    }
}

?>