<?php

require '../libs/Dbconnection.php';

class User extends DbConnection {

    public function user_registration($firstname, $lastname, $house_name, $street, $pin, $district, $state, $email, $phone, $username, $password) {
        $query = mysqli_query($this->connection, "insert into `user` set `firstname`='$firstname',"
                . "`lastname`='$lastname',"
                . "`house_name`='$house_name',"
                . "`street`='$street',"
                . "`pin`='$pin',"
                . "`district`='$district',"
                . "`state`='$state',"
                . "`email`='$email',"
                . "`phone`='$phone',"
                . "`username`='$username',"
                . "`password`='$password'");
    }

    public function getUserByEmail($email) {
        return $this->getData("SELECT * FROM `user` where email = '$email'");
    }

    public function loginUser() {
        return $this->select("select `id` from `user` order by id DESC LIMIT 1");
    }

}
