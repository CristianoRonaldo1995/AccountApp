
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Users</title>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="http://getbootstrap.com/assets/css/docs.css" />
    <link href="../CSS/bootstrap.min.css" rel="stylesheet"/>
    <link href="../CSS/admin.css" rel="stylesheet"/>
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../admin/jquery.dataTables.js" type="text/javascript"></script>
</head>

<body>
    <!--  Admin Navbar -->
    <?php $thisPage = "users"; include '../admin/admin-nav.php'; ?>
    <div  id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid" style="margin-top:30px" >
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                            <span class="pull-right">
                                <a href="../admin/addUser.php">
                                    <div class="thumbnail" align="right" style="width: 35px; height: 35px">
                                        <img src="../img/addUser.png"/>
                                    </div>
                                </a>
                            </span>
                        </h1>
                        <!-- breadcrum -->
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-user"></i> <a href="users.php">Account</a>
                            </li>
                        </ol>
                    </div>
                </div>
                
                <!-- include the 'edit user' editable table -->
                <?php include('edit_users.php'); ?>       
            </div>
        </div>
    </div>
            
</body>
</html>