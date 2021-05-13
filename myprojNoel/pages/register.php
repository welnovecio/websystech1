<?Php
session_start();
session_destroy();
include("styles.php");




?>


<html>
	<head>
		<title>
			CRUD
		</title>
		<!--<link href="../bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="../bootstrap/bootstrap/js/bootstrap.js"></script>
        <script src="../bootstrap/bootstrap/js/bootstrap.min.js"></script>-->
	</head>
	<style type="text/css">
	.container{
  		margin-top: 10px;
    	width:500px;
	}
	.img{
    	float:right;
    	padding-left:20px;
    	margin-top:20px;
	}
	td{
		padding: 2px;
	}
	label{
		color: red;
		font-weight: normal;
	}
	.padtop{
		padding-top: 10px;
	}
	.card-header{
		text-align: left;
	}
	.card-body{
		margin-top: 20px;
		margin-bottom: 20px;
	}

	body
{
    background-image: url('../img/another.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

	</style>
	
		<body>
			<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      		<h5 class="my-0 mr-md-auto font-weight-normal">MySite</h5>
      		<nav class="my-2 my-md-0 mr-md-3">
        	<a class="p-2 text-dark" href="../index.php">Home</a>
			<a class="btn btn-outline-primary" href="../pages/login.php">Login</a>
      		</nav>
			</div>
			<form method="post" action="../process/registerprocess.php">
			<div class="container">

            
				<div class="header">
                        <?php 
						if(isset($_SESSION["registration_error_msg"])){
							echo '<div class="alert alert-danger" role="alert">';
							echo $_SESSION["registration_error_msg"];
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
					<div style="position: absolute;left: 10px;" class="container">
      				<div class="card-deck mb-3 text-center">
        			<div class="card mb-4 box-shadow">
          			<div class="card-header">
            		<h4 class="my-0 font-weight-normal">Register</h4>
			  		</div>

    


          			<div class="card-body">
							<input type="text" name="lname" class="form-control" required="true" placeholder="lastname"></br>
							<input type="text" name="fname" class="form-control" required="true" placeholder="firstname"></br>
							<input type="text" name="username" class="form-control" required="true" placeholder="username"></br>
							<input type="password" name="password" class="form-control" required="true" placeholder="password"></br>
							<input type="email" name="email" class="form-control" required="true" placeholder="email"></br>
							<button type="submit" class="btn btn-lg btn-block btn-primary">Register</button>
          				</div>
					</div>
					</form>
				</div>
		</body>
</html>