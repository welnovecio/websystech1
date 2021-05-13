<?php


session_start();
 session_destroy();
include("styles.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="sweetalertlog/css/style1.css">
    <link href=".." rel="stylesheet" type="text/css">

<style type="text/css">

body
{
font-family: arial;
}

      .login {
    width: 400px;
    background-color: #ffffff;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 50px auto;
    border: 4px solid gray;
    left: 150px;
    top: 80px;
    position: absolute;
}
.login h1 {
    text-align: center;
    color: white;
    font-size: 24px;
    padding: 20px 0 20px 0;
    border-bottom: 1px solid white;
}
.login form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
}
.login form label {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    background-color: #ff8080;
   border-right: 2px solid orange;
    color: #ffffff;
}
.login form input[type="password"], .login form input[type="text"] {
    width: 310px;
    height: 50px;
    border: 1px solid #dee0e4;
    margin-bottom: 20px;
    padding: 0 15px;
}
.login form input[type="submit"] {
    width: 100%;
    padding: 15px;
  margin-top: 20px;
    background-color: #3274d6;
    border: 0;
    cursor: pointer;
    font-weight: bold;
    color: #ffffff;
    transition: background-color 0.2s;
}
.login form input[type="submit"]:hover {
  background-color: #2868c7;
    transition: background-color 0.2s;
}

body
{
    background-image: url('../img/another.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


    </style>




<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<body>


 <div style="background-color:gainsboro;" class="login">
            <h1>Login</h1>
            <form action="../process/loginprocess.php" method="POST">

    

                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="email" placeholder="Email" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login" name="btn-login">


                <div class="container">

            
                <div class="header" style="font-size: 15px;">
                        <?php 
                        if(isset($_SESSION["login_error_msg"])){
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $_SESSION["login_error_msg"];
                            echo '</div>';
                            }
                        echo'<br>';
                        if(isset($_SESSION["exist_error_msg"])){
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $_SESSION["exist_error_msg"];
                            echo '</div>';
                            }
                            if(isset($_SESSION["success_register"])){
								echo '<div class="alert alert-success" role="alert">';
								echo $_SESSION["success_register"];
								echo '</div>';
								}


                        ?>

                    <br/>
                    </div>

                        </div>

         <a href="register.php" style="color:green;">Dont have an account?</a>


            </form>
        </div>
</body>

</html>
  
