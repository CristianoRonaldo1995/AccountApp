<?php
/* fetch array of all users in the users table to display on datatable  */
require_once('dbconnection.php');
$query = mysql_query("SELECT * FROM users");
while($fetch = mysql_fetch_array($query))
{
		$output[] = array ($fetch[0],$fetch[1],$fetch[2],$fetch[3],$fetch[4],$fetch[5],$fetch[6],$fetch[7]);
}
echo json_encode($output);
?>