<?php

require_once'../libs/farmer.php';
if (!empty($_POST)) {
    $firstname = $_POST['First_Name'];
    $lastname = $_POST['Last_Name'];
    $house_name = $_POST['house_name'];
    $street = $_POST['street'];
    $pin = $_POST['pin'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $type_of_cultivation = $_POST['type_of_cultivation'];
    echo $username = $_POST['username'];
    echo $password = $_POST['password'];
    $reg = new Farmer();
    $farmer_data=$reg->getFarmerByEmail($email);
    if (empty($farmer_data)) {
    $result = $reg->farmer_registration($firstname, $lastname, $house_name,$street,$pin,$district, $state, $email, $phone, $type_of_cultivation, $username, $password);
    }
 else {
         echo "you cant use this email ID !.. choose another one";
    }
}