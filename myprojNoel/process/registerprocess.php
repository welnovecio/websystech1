
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
</body>
</html>

<?Php

require_once('../dao/config.php');
require_once('../dao/crudDAO.php');


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$lname = test_input($_POST['lname']);
    $fname = test_input($_POST['fname']);
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $email = test_input($_POST['email']);


    if(!empty($lname) && !empty($fname) && !empty($username) && !empty($password) && !empty($email))
    {
        $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])\S{6,12}$/";     
         //must contain 1 uppercase, 1 lowercase, any number, min6, max=12

         if(!preg_match($regex,$password))
        {
         

            session_start();
            $_SESSION["registration_error_msg"] = "password complexity requirements does not meet!";
                        header("location:../pages/register.php");
        }

        else
        {
            $user = new crudDAO();
            $register = $user->register($lname,$fname,$username,$password,$email);

            if($register)
            {
                session_start();
                $_SESSION["success_register"] = "User Successfully Registered!";

                header("location:../pages/register.php");
            }
            else{
                echo"<br>Registration failed";
            }


        }


    }

?>