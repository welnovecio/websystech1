<?Php

require_once('../dao/config.php');

class crudDAO
{


    public function register($lname,$fname,$username,$password,$email)
    {
       global $db;

        $hashpass = md5($password);

        $sql="SELECT * FROM users WHERE email = '$email'";
		$result=$db->query($sql);
		
        if(mysqli_num_rows($result) > 0){
			return false;
		}
        else{
			$sql="INSERT INTO users (lname, fname, username, password, email) VALUES ('$lname','$fname','$username','$hashpass','$email')";
			$result=$db->query($sql);
        }

        if($result){
            return $result;
        }
        else{
            return false;
        }

    }

    public function Login($email,$password)
    {  
    global $db;
    
    $sql= "SELECT * FROM users WHERE email = '".$email."' AND password = '".md5($password)."'";  
              
               $result = $db->query($sql);

               /*
               if(mysqli_num_rows($result>0))
               {
                while($row = mysqli_fetch_assoc($result))
                {
                    session_start();

                    $_SESSION['fname'] = $row['fname'];

                    

                }

                return true;
               }
    

               else
               {
                   return false;
               }
               */

            $num_results = $result->num_rows;


                  
                if ($num_results == 1)   
                {  
               
                    while($row = mysqli_fetch_assoc($result))
                    {
                        session_start();
    
                        $_SESSION['fname'] = $row['fname'];
    
                        
    
                    }  
                

                    return TRUE;  
                }  
                else  
                {  
                    return FALSE;  
                }  
        
    
      } 

      public function read()
      {
          global $db;

          $sql = "SELECT id,fname,lname FROM users";

          $result = $db->query($sql);

          return $result;
          

      }

      public function delete()
      {
     
        
        $id = $_POST['delete'];
        
        global $db;
        
                  $sql = "DELETE FROM users WHERE id=$id" or die($mysqli->error());
        
                  $resultdelete = $db->query($sql);
                session_start();
                  $_SESSION["record_delete"] = "Record Deleted Successfully";
                  header("location:../pages/read.php");   
               
    
      }


      public function edit()
        {
        $id = $_POST['edit'];
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
     


        }


      

    
}    

?>


