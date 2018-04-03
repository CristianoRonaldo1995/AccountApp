<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Users</title>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.0/css/jquery.dataTables.css" />
<link rel="stylesheet" href="http://getbootstrap.com/assets/css/docs.css" />
<link href="../CSS/bootstrap.min.css" rel="stylesheet"> 
<link href="../CSS/admin.css" rel="stylesheet">


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../admin/jquery.dataTables.js" type="text/javascript"></script>

    
<script type="text/javascript"> 
$(document).ready(function() {
	
//get orders from database and store in array 
var oTable = $('#jsontable').dataTable();  //Initialize the datatable

	$('#load').on('click',function(){
		var user = $(this).attr('id');
		if(user != '') 
		{ 
		$.ajax({
			url: 'process.php?method=fetchdata',
			dataType: 'json',
			success: function(s){
			console.log(s);
					oTable.fnClearTable();
					 	for(var i = 0; i < s.length; i++) {
                         oTable.fnAddData([
                                    s[i][0],
									s[i][1],
									s[i][2],
									s[i][3],
									s[i][5],
									s[i][6],
									s[i][7]
                                      	   ]);										
										} // End For
										
			},
			error: function(e){
			   console.log(e.responseText);	
			}
			});
		}
	});
});
</script>
    
</head>

<body>
    
  <div  id="wrapper">  
    
    <?php $thisPage = "users"; include '../admin/admin-nav.php';?>
    
    
        <div id="page-wrapper">

            <div class="container-fluid" style="margin-top:30px">
            
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12   ">
                        <h1 class="page-header">
                            Accounts
                            <span class="pull-right">
                                <a href="../admin/addUser.php">
                                <div class="thumbnail" align="right" style="width: 35px; height: 35px">
                                        <img src="../img/addUser.png"/>
                                </div>
                                    </a>
                                </span>
                        </h1>
                        
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-fw fa-user"></i> Accounts
                            </li>
                        </ol>
                    </div>
                </div>

                     <input type="button" class="btn btn-primary" value="Get Accounts" id="load"/>
                     
                        <a href="../admin/edit_users_table.php" type='button' class='btn btn-success'>
                                    Edit Accounts
                                </a>
                                  <hr />
                <!-- Display orders from above onto table below -->
                <div class="container">
                    <div class="row">
                      <div class="table-responsive">
                        <table class="table table-hover" id="jsontable" class="display table table-bordered" cellspacing="0">
                          <thead>
                            <tr>
                              <th>User ID</th>
                              <th>Username</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Admin</th>
                              <th>Date Added</th>
                            </tr>
                          </thead>
                        </table>   
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    
    </body>

</html>











