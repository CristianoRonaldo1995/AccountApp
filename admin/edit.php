<?php  

    /* Updating the user information from the table */
 $connect = mysqli_connect("localhost", "root", "", "AccountApp");  
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE users SET ".$column_name."='".$text."' WHERE usr_id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Updated';  
 }  
 ?>  