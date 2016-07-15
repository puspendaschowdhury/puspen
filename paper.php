<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VUI University | Papers</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<!-- prettyPhoto -->
<link rel="stylesheet" href="../layout/scripts/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/prettyphoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false,
        social_tools: false
    });
});
</script>
<!-- / prettyPhoto -->
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><img src="../images/logo.jpg" width="130" height="113" />&nbsp;&nbsp;&nbsp;<a href="../index.html">UNIVERSITY</a></h1>
	</div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li><a href="../index.html">Homepage</a></li>
      <li><a href="#">Course</a>
	    <ul>
		  <li><a href="bca.php">BCA</a></li>
		  <li><a href="bba.php">BBA</a></li>
		  <li><a href="mca.php">MCA</a></li>
		  <li><a href="btech.php">B.Tech</a></li></ul>
      </li>
      <li><a href="#">Tutorial</a>
        <ul>
          <li><a href="#">Videos</a>
		      <ul style="left: 150px; top: 0px;">
		          <li><a href="bca_gallery.php">BCA</a></li>
		          <li><a href="bba_gallery.php">BBA</a></li>
		  		  <li><a href="mca_gallery.php">MCA</a></li>
		          <li><a href="btech_gallery.php">B.Tech</a></li></ul>
              </li>
          <li><a href="uchat/chat.php">Chats</a></li>
        </ul>
      </li>
	  <li class="active"><a href="login.php">Examination</a></li>
	  <li><a href="register.php">Register</a></li>
	  <li><a href="aboutus.php">About Us</a></li>
	  </ul>
    <div  class="clear"></div>
  </div>
</div>

<body>
<form name="a" action="exam.php" method="post">
<table align="center" border="0">
<tr>
<td align="center">
<input type="radio" value="1" name="paper" />BCA</td></tr>
<tr>
<td align="center">
<input type="radio" value="2" name="paper" />BBA</td></tr>
<tr> <td align="center">
<input type="radio" value="3" name="paper" />MCA</td></tr>
<tr> <td align="center">
<input type="radio" value="4" name="paper" />B.Tech</td></tr>
<tr>
<td align="center">
<input type="submit" name="submit" value="start test" />
</td></tr></table>

</form>
</body>
</html>