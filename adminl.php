<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>VUI University</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><img src="images/logo.jpg" style="border-radius:60%" width="130" height="113" />&nbsp;&nbsp;&nbsp;<a href="index.html">UNIVERSITY</a></h1>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li><a href="index.html">Homepage</a></li>
      <li><a href="#">Course</a>
	    <ul>
		  <li><a href="pages/bca.php">BCA</a></li>
		  <li><a href="pages/bba.php">BBA</a></li>
		  <li><a href="pages/mca.php">MCA</a></li>
		  <li><a href="pages/btech.php">B.Tech</a></li></ul>
      </li>
      <li><a href="#">Tutorial</a>
        <ul>
          <li><a href="#">Videos</a>
		      <ul style="left: 150px; top: 0px;">
		          <li><a href="pages/bca_gallery.php">BCA</a></li>
		          <li><a href="pages/bba_gallery.php">BBA</a></li>
		  		  <li><a href="pages/mca_gallery.php">MCA</a></li>
		          <li><a href="pages/btech_gallery.php">B.Tech</a></li></ul>
              </li>
          <li><a href="pages/uchat/chat.php">Chats</a></li>
        </ul>
      </li>
	  <li><a href="pages/login.php">Examination</a></li>
	  <li><a href="pages/register.php">Register</a></li>
	  <li><a href="pages/aboutus.php">About Us</a></li>
	  <li class="active"><a href="adminl.php">Administrator</a></li>
    </ul>
   <div  class="clear"></div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
   
    <!-- ####################################################################################################### -->
	<strong><font size="+3"><div align="center">ADMINISTRATOR LOGIN</div></font> </strong>
	<form id="form2" name="form2" method="post" action="admin.php">
			
		      <table width="68%" height="45" align="center" bgcolor="#A5DBDE">
       
        <tr>
          <td><font size="+1"><div align="right" class="style6">Admin Name </div></font>            
          </td>
          <td><label>
            <input name="admin" type="text" id="admin" />
          </label></td>
        </tr>
        <tr>
          <td><font size="+1"><div align="right" class="style6">Password</div></font></td>
          <td><label>
            <input name="pwd" type="password" id="Password" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
              <label>
              <input type="submit" name="Submit" value="Submit" >
              </label>
          </div></td>
        </tr>
      </table>
  </form></p> </div> 
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4"></div> 
    <!-- ####################################################################################################### -->
    
<!-- liteAccordion is Homepage Only --> 
<script type="text/javascript" src="layout/scripts/liteaccordion-v2.2/js/liteaccordion.jquery.min.js"></script> 
<script type="text/javascript">
$("#featured_slide").liteAccordion({
    theme: "os-tpl",
    containerWidth: 960, // fixed (px)
    containerHeight: 360, // fixed (px) - overall height of the slider
    headerWidth: 48, // fixed (px) - slide spine title
    firstSlide: 1, // displays slide (n) on page load
	activateOn: "click", // click or mouseover
    autoPlay: false, // automatically cycle through slides
    pauseOnHover: true, // pause slides on hover
    rounded: false, // square or rounded corners
    enumerateSlides: true, // put numbers on slides
    slideSpeed: 800, // slide animation speed
    cycleSpeed: 6000, // time between slide cycles
});
</script>
</body>
</html>