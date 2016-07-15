<?php 
include('connect.php');
mysql_query("DELETE FROM `result`");
header('location:../index.html')
?>