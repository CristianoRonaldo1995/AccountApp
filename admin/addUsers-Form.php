<?php
            if(isset($_POST["admin"])){
                $admin = $_POST["admin"];
            }else{

                $admin = '0';
                     }
                            if(count($_POST)>0) {
                                /* Form Required Field Validation */
                                foreach($_POST as $key=>$value) {
                                if(empty($_POST[$key])) {
                                echo "<script>
                                    alert('$key needs to be populated.');
                                    window.location.href='../user/addUser.php';
                                    </script>";
                                    exit;

                                }else
                                /* Password Matching Validation */
                                if($_POST['password'] != $_POST['confirm_password']){ 
                                        echo "<script type='text/javascript'>alert('Passwords do not match, please try again.');
                                        window.location.href='addUser.php';
                                        </script>";
                                }else

                                /* Email Validation */
                                if(!isset($message)) {
                                if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
                                        echo "<script type='text/javascript'>alert('Invalid E-mail, Please try again!');
                                        window.location.href='addUser.php';
                                        </script>";
                                        exit;
                                }else

                                    if(isset($_POST['userName']) && isset($_POST['password'])){
                                    require_once("dbconnection.php");
                                    $db_handle = new DBController();
                                    $user = $_POST['userName'];
                                    $pass = $_POST['password'];

                                    $query = mysql_query("SELECT * FROM users WHERE username='$user'");
                                    if(mysql_num_rows($query) > 0 ) { //check if there is already an entry for that username
                                        echo "<script type='text/javascript'>alert('This username is taken!');
                                        window.location.href='addUser.php';
                                        </script>";
                                        exit;
                                    }
                               }
                        }
                                    
                    /* Send user to database */
                    if(!isset($message)) {
                        require_once("dbconnection.php");
                        $db_handle = new DBController();
                        $query = "INSERT INTO users (username, firstname, surname, password, email, admin) VALUES
                        ('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . ($_POST["password"]) . "', '" . $_POST["userEmail"] . "', '{$admin}')";
                        $result = $db_handle->insertQuery($query);
                        if(!empty($result)) {
                            echo "<script type='text/javascript'>alert('This user has been added successfully!');
                            window.location.href='users.php';
                            </script>";
                            exit;
                            unset($_POST);
                        } else {
                            $message = "problem with your registration, please try again!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                }
        }
}


?>