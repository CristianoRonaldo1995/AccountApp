<!-- styleing the table -->


<style>
table {
    width: 100%;
    margin: 2em auto;
}
thead {
    background: #fff;
    color: #000;
}
td {
    width: 10em;
    padding: 0.3em;
}
tbody {
    background: #fff;
}
div.pager {
    text-align: center;
    margin: 1em 0;
}
div.pager span {
    display: inline-block;
    width: 1.8em;
    height: 1.8em;
    line-height: 1.8;
    text-align: center;
    cursor: pointer;
    background: #000;
    color: #fff;
    margin-right: 0.5em;
}
div.pager span.active {
    background: #c00;
}
tr:hover {background-color: #f5f5f5}
</style>


<script>
    /* making table searchable */
    $(document).ready(function () {
    (function ($) {
            $('#search').keyup(function () {
                var rex = new RegExp($(this).val(), 'i');
                $('.searchable tr').hide();
                $('.searchable tr').filter(function () {
                    return rex.test($(this).text());
                }).show();
            })
        }(jQuery));
    });
    
    /* adding pagination to table */
    $('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 5;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $pager = $('<div class="pager"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    $pager.insertBefore($table).find('span.page-number:first').addClass('active');
    });

</script> 


<?php  
//connecting to database and inserting data from the db to the table
 $connect = mysqli_connect("localhost", "root", "", "AccountApp");  
 $output = '';  
 $sql = "SELECT * FROM users ORDER BY usr_id DESC";  
 $result = mysqli_query($connect, $sql);  
  
 $output .= '    
    <form style="margin-left: 395px" class="search-form">
        <div class="form-group has-feedback" style="width: 350px;">
            <input  type="text" class="form-control" name="search" id="search" placeholder="Search for user">
                 <span class="glyphicon glyphicon-search form-control-feedback"></span>
         </div>
    </form>
                  
      <div class="table-responsive">  
           <table class="paginated" id="table" class="table">
           <thead>  
                <tr>  
                     <th scope="col" width="5%">Id</th>  
                     <th scope="col" width="10%">Username</th>  
                     <th scope="col" width="10%">First Name</th>  
                     <th scope="col" width="10%">Last Name</th>  
                     <th scope="col" width="20%">Email</th>  
                     <th scope="col" width="10%">Admin</th>  
                     <th scope="col" width="10%">Date Created</th>  
                     <th scope="col" width="10%">Delete</th>  
                     
                </tr> 
            </thead>';
                    
    if(mysqli_num_rows($result) > 0)  
    {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= ' 
           <tbody class="searchable" > 
                <tr>  
                     <td>'.$row["usr_id"].'</td>  
                     <td class="username" data-id1="'.$row["usr_id"].'">'.$row["username"].'</td>  
                     <td class="firstname" data-id2="'.$row["usr_id"].'" contenteditable>'.$row["firstname"].'</td>  
                     <td class="surname" data-id3="'.$row["usr_id"].'" contenteditable>'.$row["surname"].'</td>  
                     <td class="email" data-id4="'.$row["usr_id"].'" contenteditable>'.$row["email"].'</td>  
                     <td class="admin" data-id5="'.$row["usr_id"].'" contenteditable>'.$row["admin"].'</td>  
                     <td class="log" data-id6="'.$row["usr_id"].'">'.$row["log"].'</td>  
                     <td><button type="button" name="delete_btn" data-id7="'.$row["usr_id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
            </tbody>
           ';  
      }  
    }  
    else  
    {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
    }  
    $output .= '</table>  
      </div>';  
    echo $output;  
?>  
