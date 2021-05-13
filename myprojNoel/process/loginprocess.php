<?php

require_once('../dao/crudDAO.php');



 $userlogin = new crudDAO();

if($_POST['btn-login']){  


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


    $password = test_input($_POST['password']);
    $email = test_input($_POST['email']);

        $user = $userlogin->Login($email,$password);  

        if($user) {  

            session_start();
            $_SESSION["login"] = true;

           header("location:../pages/read.php");  
        	
        }
         else{  
            
            session_start();
            $_SESSION["login_error_msg"] = "Login Failed!";
            
            header("location:../pages/login.php");

        }  
    }  


              
?>

