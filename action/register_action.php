<?php

require_once'../libs/user.php';
session_start();
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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $reg = new User();
    $user_data = $reg->getUserbyEmail($email);
//    print_r($user_data);
    if (empty($user_data)) {
        $result = $reg->user_registration($firstname, $lastname, $house_name, $street, $pin, $district, $state, $email, $phone, $username, $password);
        $result = $reg->loginUser();
        $id = $result[0]['id'];
        header('location:/organic_farming/user_home.php');
    } else {

        echo "you cant use this email ID !.. choose another one";
    }
}    