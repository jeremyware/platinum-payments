<?php

$connect = mysql_connect(“”, “admin_name”, “password”); 
if ($connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“database_name”, $connect);
 $user_info = “INSERT INTO table_name (username, email) VALUES ('$_POST[username]', '$_POST[email]')”; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }

echo “Added username”;

mysql_close($connect); 
?>