<?php 

$con1=mysql_connect("localhost", "root", "");

mysql_select_db("vedio",$con1);
if(isset($_POST['submit']))
{$name=$_FILES['file']['name'];
//$temp=$_FILES['file']['tmp_name'];
move_uploaded_file($_FILES['file']['tmp_name'],"movie/".$name);
$url="http://localhost/movie/movie/$name";
mysql_query("INSERT INTO `vedio`.`vedio` (`id`, `Name`, `path`) VALUES (NULL, '$name', '$url');");
}


?>

<body>

<form name="index.php" method="post" enctype="multipart/form-data">
<input type="file" name="file"/>
<input type="submit" name="submit" value="uploed"/>
<a href="vedio.php">vedios</a>
</form>
<?php
if(isset($_POST['submit']))
{echo "<br />".$name."File is uploded";
}
?>

</body>
</html>