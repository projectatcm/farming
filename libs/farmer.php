<?php

require '../libs/Dbconnection.php';

class Farmer extends DbConnection {

    public function farmer_registration($firstname, $lastname, $house_name, $street, $pin, $district, $state, $email, $phone, $type_of_cultivation, $username, $password) {
        mysqli_query($this->connection, "insert into `farmer` set `firstname`='$firstname',"
                . "`lastname`='$lastname',"
                . "`house_name`='$house_name',"
                . "`street`='$street',"
                . "`pin`='$pin',"
                . "`district`='$district',"
                . "`state`='$state',"
                . "`email`='$email',"
                . "`phone`='$phone',"
                . "`type_of_cultivation`='$type_of_cultivation',"
                . "`username`='$username',"
                . "`password`='$password'");
    }

    public function getFarmerByEmail($email) {
        return $this->getData("SELECT * FROM `farmer` where email = '$email'");
    }

}
