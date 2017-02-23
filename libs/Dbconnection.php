<?php

class Dbconnection {

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "organic_farming";
    public $connection;

    public function __construct() {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to conenct to MySQL: " . mysql_connect_error(), E_USER_ERROR);
        }
    }

    public function setData($query) {
        $result = mysqli_query($this->connection, $query) or die("ERROR : " . mysqli_error($this->connection));
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    public function getData($query) {
       $result= mysqli_query($this->connection,$query);
       return $res=mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    

    function select($query) {
        $login = mysqli_query($this->connection, $query);
        return $re = mysqli_fetch_all($login, MYSQLI_ASSOC);
    }

}
