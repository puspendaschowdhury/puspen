<html>
	
<title>VUI University | Chats</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../../layout/scripts/jquery.min.js"></script>
<!-- prettyPhoto -->
<link rel="stylesheet" href="../../layout/scripts/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="../../layout/scripts/prettyphoto/jquery.prettyPhoto.js"></script>
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

<body id="top" bgcolor="#072C53">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><img src="../../images/logo.jpg" style="border-radius:60%" width="130" height="113" />&nbsp;&nbsp;&nbsp;<a href="../../index.html">UNIVERSITY</a></h1>
	</div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li><a href="../../index.html">Homepage</a></li>
      <li><a href="#">Course</a>
	    <ul>
		  <li><a href="../bca.php">BCA</a></li>
		  <li><a href="../bba.php">BBA</a></li>
		  <li><a href="../mca">MCA</a></li>
		  <li><a href="../btech">B.Tech</a></li></ul>
      </li>
      <li><a href="#">Tutorial</a>
        <ul>
          <li><a href="#">Videos</a>
		  <ul style="left: 150px; top: 0px;">
		          <li><a href="../bca_gallery.php">BCA</a></li>
		          <li><a href="../bba_gallery.php">BBA</a></li>
		  		  <li><a href="../mca_gallery.php">MCA</a></li>
		          <li><a href="../btech_gallery.php">B.Tech</a></li></ul>
              </li>
          <li class="active"><a href="chat.php">Chats</a></li>
        </ul>
      </li>
	  <li><a href="../register.php">Register</a></li>
	  <li><a href="../aboutus.php">About Us</a></li>
	  <li><a href="../../adminl.php">Administrator</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row6">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="gallery" class="clear">
      <div class="gallerycontainer clear">
<link rel="stylesheet" type="text/css" href="chatfiles/chatstyle.css" />

<div id="chatarea">
 <div id="chatrooms">
<?php
include('chatfiles/setchat.php');
echo $chatS->chatRooms();          // add the chat rooms
?>
 </div>
 <div id="chatwindow"><div id="chats"></div><div id="chatusers"></div></div>
<div id="playchatbeep"><img src="chatex/playbeep2.png" width="25" height="25" alt="chat beep" id="playbeep" onClick="setPlayBeep(this)" /><span id="chatbeep"></span></div>
<?php echo $chatS->chatForm().jsTexts($lsite); ?>
<script type="text/javascript" src="chatfiles/chatfunctions.js"></script><noscript><a href="http://coursesweb.net/php-mysql/" title="Virtual University Chat-Room">Virtual University Chat-Room</a></noscript>
</div>	
</div>
</div>
</body>
</html>
