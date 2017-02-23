<?php
require '../libs/Common.php';
session_start();
if (!empty($_POST)) 
   {
    $name = $_POST['username'];
    $pwd = $_POST['password'];
    $obj = new Common();
    $result1 = $obj->login_admin($name,$pwd);
    $result2=array();
    $result2 = $obj->user_login($name,$pwd);
    $result3 = $obj->farmer_login($name,$pwd);
  
    $admin=  sizeof($result1);
    $user=  sizeof($result2);
    $farmer=  sizeof($result3);
   if($admin!=0)
   {
       header('location:../admin_home.php');
   }
   else if($user!=0)
   {
       
      header('location:../user_home.php');
       $_SESSION['user_id']=$result2[0]['id'];

   }
 else if($farmer!=0)
       
 {
     header('location:../farmer_home.php');
     $_SESSION['farmer_id']=$result3[0]['id'];
 }else {
        echo '<script type="text/javascript">';
        echo 'alert("Email And Password Are Not Matching");';
        echo 'window.location="../login.php";';
        echo '</script>';
    }
// else 
//     
// {
//     $_SESSION['error']="invalid user name or password";
//     header('location:../login.php');
// }
 
   
}
