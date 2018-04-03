<?php  
//delete user form database
 $connect = mysqli_connect("localhost", "root", "", "AccountApp");  
 $id = $_POST["id"];  
 $sql = "DELETE FROM users WHERE usr_id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>  