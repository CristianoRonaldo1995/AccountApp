<!-- Page Heading -->
<html>  
      <head>  
           <title>Edit Users</title>  
      </head>  
      <body>  
           <div class="container">  
            
                <div class="table-responsive table table-hover dataTable">  
                     <div id="live_data"></div>                 
                </div>  
               <hr />
           </div>  
      </body>  
 </html>  
 

 <script>  
     /* Posting user data from Select.php */
     $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
     /* validating firstname and surname fields */
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var first_name = $('#firstname').text();  
           var last_name = $('#surname').text();  
           if(first_name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(last_name == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
     /* posting the data that has been changed/edited to the database */
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }
     /* checking whether the username has been changed */
      $(document).on('blur', '.username', function(){  
           var id = $(this).data("id1");  
           var user_name = $(this).text();  
           edit_data(id, user_name, "username");  
      });  
     /* checking whether the firstname has been changed */
      $(document).on('blur', '.firstname', function(){  
           var id = $(this).data("id2");  
           var first_name = $(this).text();  
           edit_data(id, first_name, "firstname");  
      });  
     /* checking whether the surname has been changed */
      $(document).on('blur', '.surname', function(){  
           var id = $(this).data("id3");  
           var last_name = $(this).text();  
           edit_data(id,last_name, "surname");  
      });
     /* checking whether the email has been changed */
      $(document).on('blur', '.email', function(){  
           var id = $(this).data("id4");  
           var email = $(this).text();  
           edit_data(id,email, "email");  
      });
     /* checking whether the user has been made admin */
      $(document).on('blur', '.admin', function(){  
           var id = $(this).data("id5");  
           var admin = $(this).text();  
           edit_data(id,admin, "admin");  
      });
     /* checking whether the user is being deleted */
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id7");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>  