<?php
include_once('../dao/config.php');
include_once('../pages/styles.php');
require_once('../dao/crudDAO.php');
$id = $_GET['edit'];


$qry = mysqli_query($db,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry);

if(isset($_POST['save']))
{


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	
    $edit = mysqli_query($db,"update users set fname='$fname', lname='$lname' where id='$id'");
	
    if($edit)
    {

        mysqli_close($db); 
        header("location:../pages/read.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}


?>

<div style="position: fixed;left:500px;top:200px;">
<form method="POST">
<div class="form-group">
	<label>Firstname</label>
	<input type="text" name="fname" class="form-control" 
	value="<?php
	echo $data['fname'] ?>" placeholder="Enter your Firstname">
						</div>

						<div class="form-group">
	<label>Lastname</label>
	<input type="text" name="lname" class="form-control" 
	value="<?php echo $data['lname'] ?>" placeholder="Enter your Lastname">
						</div>
	<div class="form-group">

	<button type="submit" class="btn btn-primary" name="save">Save</button>

	</div>



</form>
	</div>