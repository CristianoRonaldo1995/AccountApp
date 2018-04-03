<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Homepage</title>
    <link href="../CSS/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/admin.css" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <!--Admin Nav Bar -->
        <?php   $thisPage = "index";  include '../admin/admin-nav.php'; ?>
        
        <!--Page Body -->
        <div id="page-wrapper">
            <div class="container-fluid">
                        <!--Breadcrum -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Summary
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
                <!--javascript -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
