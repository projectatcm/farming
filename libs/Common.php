<?php
require_once  '../libs/Dbconnection.php';

class Common extends Dbconnection {
    
    public function login_admin($username, $password) {
        return $this->select("select * from `admin` where `username`='$username'&& `password`='$password'");
    }

    public function user_login($user_name, $password) {
        return $this->select("select * from `user` where `username`='$username'&& `password`='$password'");
    }

    public function farmer_login($user_name, $password) {
        return $this->select("select * from `farmer` where `username`='$username'&& `password`='$password'");
    }
}