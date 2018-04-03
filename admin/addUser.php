<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Admin</title>
    <link href="../CSS/bootstrap.min.css" rel="stylesheet"> 
    <link href="../CSS/admin.css" rel="stylesheet">
</head>

<body>
    
<div id="wrapper">
    
    <!--Admin Nav Bar -->
     <?php
            $thisPage = 'user';
            include ( "../admin/admin-nav.php")
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <!--Breadcrum -->
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add User
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-fw fa-user"></i>  <a href="users.php">Accounts</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add User
                            </li>
                        </ol>
                    </div>
                </div>
                    
                <!-- Add User -->

                <div id="register" class="row">
                    <div class="col-lg-6">
                        <form action="addUsers-Form.php" name="addUser" method="post" role="form" >
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name='firstName' value = "<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Surname</label>
                                <input class="form-control" type="text" name='lastName' value = "<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name='userName' value = "<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name='userEmail' value = "<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name='password' value = "<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name='confirm_password' value = "<?php if(isset($_POST['confirm_password'])) echo $_POST['confirm_password']; ?>" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                            <label class="checkbox-inline"><input name="admin" type="checkbox" value="1">Admin Account</label>
                            </div>
                            <div style="height:100px; line-height:130px" >
                            <button type="submit" name="submit" class="btn btn-default">Add Account</button>
                            <button type="reset" class="btn btn-default">Reset Form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
