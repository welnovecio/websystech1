<?php
require_once('../dao/crudDAO.php');

$userdelete = new crudDAO();
$user = $userdelete->delete(); 

if($user) {  

    session_start();
    $_SESSION["delete"] = true;

   header("location:../pages/read.php");  
    
}









?>