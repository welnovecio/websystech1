<?Php
session_start();
session_destroy();

header("location:../pages/login.php");


?>