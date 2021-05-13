
<?Php

session_start();

include("styles.php");
require_once('../dao/config.php');
require_once('../dao/crudDAO.php'); 


$read = new crudDAO();
$list = $read->read();


?>


<html>
	<head>
		<title>
			
		</title>
		<!--<link href="../bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="../bootstrap/bootstrap/js/bootstrap.js"></script>
        <script src="../bootstrap/bootstrap/js/bootstrap.min.js"></script>-->

	</head>


	<script type="text/javascript">
		function ConfirmDelete(){
		  return confirm('Do you really want to proceed?');
	  }
	  </script>


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
			<a class="btn btn-outline-primary" href="../process/logout.php">Logout</a>
      		</nav>
			</div>

            <div class="container">


    <?PHP

if(!$_SESSION['login'])
{
    header("location:../pages/login.php");
}


//echo "Welcome ".$_SESSION['fname'];



if(isset($_GET['delete']))
{

$id = $_GET['delete'];
$mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error());


}






?>
    </h1>      
    

	
  </div>

<style>
td, th {
	border: 1px solid black;
  text-align: center;
  padding: 8px;

}

th
{

	background-color:gainsboro;
}

td{
	background-color: rgb(246, 240, 240);
}

</style>

<table style="position: relative; top:170px; left:500px;">

<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Edit</th>
	<th>Remove </th>
</tr>

  <?php
foreach($list as $key => $value)
{
	?>

<tr>

 <td><?php echo $value['fname'];?></td>

 <td><?php echo $value['lname'];?></td>

 

	
<td><a href="../process/editprocess.php?edit=<?php echo $value['id']; ?>">Edit</a></td>


<form method="POST" action="../process/deleteprocess.php">

	
<input type="text" value="<?php echo $value['id'];?>" hidden="hidden" name="delete">
<td> <button type="submit" value="delete" class="btn btn-xs btn-danger" onclick="return confirm('Do you really want to proceed?');">Delete</button></td>


</form>

</tr>

<div class="container">

            
                <div style="font-size: 15px; position:absolute; top:200px;left:500px;">
                        <?php 
                        if(isset($_SESSION["record_delete"])){
                            echo '<div class="alert alert-success" role="alert">';
                            echo $_SESSION["record_delete"];
                            echo '</div>';
                            }
                        echo'<br>';
                
                        ?>

                    <br/>
                    </div>

                        </div>






<?php
}
?>

</table>

  </div>



		


		</body>
</html>
