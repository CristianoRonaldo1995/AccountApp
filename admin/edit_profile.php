<?php
    /* Submit edited user to database*/
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $uname = $_POST["userName"];
    $email = $_POST["userEmail"];
    $id = mysql_real_escape_string($_POST["confirm"]);
    require('dbconnection.php');
    
$result = mysql_query("UPDATE users SET firstname='" . $fname . "', surname='" . $lname . "', username='" . $uname . "', email='" . $email . "' WHERE username = '" . $id . "'")
                or die(mysql_error());

// if successfully updated echo 
if($result){ 
echo "<script type='text/javascript'>alert('Your information has been updated!');
            window.location.href='../admin/profile.php';
            </script>";
} 
// if unsuccessfull echo 
else { 
echo "<script type='text/javascript'>alert('There has been an issue updating your information, please try again.');
            window.location.href='../admin/profile.php';
            </script>";
} 

?>