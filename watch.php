<?php
include('link.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">


<body>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysql_query("SELECT * FROM `vedio` WHERE id='$id' ");
While($row=mysql_fetch_assoc($query))
{
	$name=$row['Name'];
	$url=$row['path'];
}
echo "you are watching".$name."<br />";
echo "<embed src='$url' width='800' height='415'></embed>";
}
else
{echo "error";
}
?>
</body>
</html>