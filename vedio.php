<?php
include('link.php');
?>

<body>
<?php
$query=mysql_query("SELECT * FROM `vedio` ");
While($row=mysql_fetch_assoc($query))
{$id=$row['id'];
$name=$row['Name'];
echo "<a href='watch.php?id=$id'>$name</a><br />";
}
?>
	
</body>
</html>