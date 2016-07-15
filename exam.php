<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>VUI University | Exam</title>
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

</body>
<div class="wrapper row4">
  <div id="container" class="clear"> 

    <div id="gallery" class="clear">
      <div class="gallerycontainer clear">
        <div class="fl_left">
   <?php session_start();?>
<!--html xmlns="http://www.w3.org/1999/xhtml"-->
<?php

include('connect.php');
$id=$_REQUEST['paper'];
 
    $query = mysql_query("SELECT * FROM `exam` WHERE `sid`=$id ");
	
	 $row=mysql_fetch_assoc($query);
		
		
			
	
 ?>

<!--
 ____________________________________________________________
|                                                            |
|    DESIGN : Jeremie Tisseau { http://web-kreation.com }    |
|      DATE : 2008.05.06                                     |
|     EMAIL : webmaster@web-kreation.com                     |
|____________________________________________________________|
-->

<head>

<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>



  	<title>Onlin Exam System</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  	<meta name="author" content="Jeremie Tisseau" />
  	<meta name="keywords" content="Free, web, template, free web template, educational, game, school, kids, children" />
  	<meta name="description" content="A free Web Template for schools." />
	<link rel="shorcut icon" href="/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<!-- Mootools CORE -->
	<script type="text/javascript" src="js/mootools-release-1.11.js"></script>
	<!-- Drop Down Menu - http://dev.visualdrugs.net/mootools/dropdown_menu.html -->
	<script src="js/dropDownMenu.js" type="text/javascript"></script>
		<!--[if IE 7]>
		<style>
		#dropdownMenu li ul ul {
			margin-left: 100px;
		}
		</style>
		<![endif]-->
		
<!-- <script language="javascript">
setTimeout('document.frm.submit()',10000);
</script>-->
		

		
		
</head>

<body>
	 
<div id="header">
	  <div class="intro">
		  <h2>&nbsp;</h2>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  
				  <form name="timer" >
				    <label>
				    <div align="right">
				      <input type="text" name="field">
			        </div>
					<script language="javascript"><!--
					var counter=30;
					var min=1;
					var x=1;
					function countDown(){
					document.timer.field.value=min + ' minute left';
					if(counter>=-1)
					{
						if(x==60)
							{
							x=0;
							
							min--;
								}
						else
							{
							x++;
							}
					counter--;
					setTimeout('countDown()',1000);
					}
					else
					setTimeout('document.frm.submit()',1000);
					}
					countDown();
					//--></script>
				    </label>
                  </form>
				  <p align="center"><?php echo " Welcome "?></p>
	  </div>
				<!-- / intro -->
		  </div> 
<div align="right">
  <!-- /header -->
  
  
  <!-- CONTENT -->
</div>
<div id="content">
		  
<form action="mark.php" method="post" name="frm">
              <div align="center" style="FONT-FAMILY: arial;font-size:1.9em;color:#0099cc"></div>
		      <div align="right" id="eTime" style="font-size:13"></div>
		      <br>
              <fieldset width="500">
              <div><style="font-size:17;color:green"><b>&nbsp;<font color="#993300"><?php echo $row["q1"]?></font>&nbsp;</b></style></div>
                <div style="font-size:8">&nbsp;</div>
                <div style="padding-left:12">
                  <table align="center" border="0">
				  <tr><td><input type='radio' value="1"  name='a1'><?php echo $row["q1ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a1'><?php echo $row["q1ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a1'><?php echo $row["q1ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a1'><?php echo $row["q1ch4"]?></td></tr>
				</table>
              </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
              <br>
              <fieldset width="500">
              <div><b style="font-size:17;color:green"><?php echo $row["q2"]?>&nbsp;</b> </div>
                <div style="font-size:8">&nbsp;</div>
                <div style="padding-left:12">
                <table>
				  <tr><td><input type='radio' value="1"  name='a2'>
				  <?php echo $row["q2ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a2'><?php echo $row["q2ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a2'><?php echo $row["q2ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a2'><?php echo $row["q2ch4"]?></td></tr>
				</table>
                </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
              <br>
              <fieldset width="500">
              <div><b style="font-size:17;color:green">&nbsp;  <?php echo $row["q3"]?>&nbsp;</b> </div>
                <div style="font-size:8">&nbsp;</div>
                <div style="padding-left:12">
                <table>
				  <tr><td><input type='radio' value="1"  name='a3'><?php echo $row["q3ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a3'><?php echo $row["q3ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a3'><?php echo $row["q3ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a3'><?php echo $row["q3ch4"]?></td></tr>
				</table>
                </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
              <br>
              <fieldset width="500">
              <div><b style="font-size:17;color:green">&nbsp;</b> <b style="font-size:17;color:green"><?php echo $row["q4"]?></b></div>
                <div style="font-size:8">&nbsp;</div>
              <div style="padding-left:12">
                 <table>
				  <tr><td><input type='radio' value="1"  name='a4'><?php echo $row["q4ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a4'><?php echo $row["q4ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a4'><?php echo $row["q4ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a4'><?php echo $row["q4ch4"]?></td></tr>
				</table>
              </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
              <br>
              <fieldset width="500">
              <div><b style="font-size:17;color:green">&nbsp;</b> <b style="font-size:17;color:green"><?php echo $row["q5"]?></b></div>
                <div style="font-size:8">&nbsp;</div>
              <div style="padding-left:12">
                 <table>
				  <tr><td><input type='radio' value="1"  name='a5'><?php echo $row["q5ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a5'><?php echo $row["q5ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a5'><?php echo $row["q5ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a5'><?php echo $row["q5ch4"]?></td></tr>
				</table>
              </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
              <br>
              <fieldset width="500">
              <div><b style="font-size:17;color:green">&nbsp;</b> <b style="font-size:17;color:green"><?php echo $row["q6"]?></b></div>
                <div style="font-size:8">&nbsp;</div>
              <div style="padding-left:12">
                <table>
				  <tr><td><input type='radio' value="1"  name='a6'><?php echo $row["q6ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a6'><?php echo $row["q6ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a6'><?php echo $row["q6ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a6'><?php echo $row["q6ch4"]?></td></tr>
				</table>
              </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
		      <fieldset width="500">
              <div><b style="font-size:17;color:green">&nbsp;</b><b style="font-size:17;color:green"><?php echo $row["q7"]?></b></div>
                <div style="font-size:8">&nbsp;</div>
              <div style="padding-left:12">
                 <table>
				  <tr><td><input type='radio' value="1"  name='a7'><?php echo $row["q7ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a7'><?php echo $row["q7ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a7'><?php echo $row["q7ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a7'><?php echo $row["q7ch4"]?></td></tr>
				</table>
              </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
              <br>
              <fieldset width="500">
              <div><b style="font-size:17;color:green">&nbsp;</b> <b style="font-size:17;color:green"><?php echo $row['q8']?></b></div>
                <div style="font-size:8">&nbsp;</div>
              <div style="padding-left:12">
                <table>
				  <tr><td><input type='radio' value="1"  name='a8'><?php echo $row['q8ch1']?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a8'><?php echo $row["q8ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a8'><?php echo $row["q8ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a8'><?php echo $row["q8ch4"]?></td></tr>
				</table>
              </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
		       <fieldset width="500">
              <div><b style="font-size:17;color:green">&nbsp;</b> <b style="font-size:17;color:green"><?php echo $row["q9"]?></b></div>
                <div style="font-size:8">&nbsp;</div>
              <div style="padding-left:12">
                <table>
				  <tr><td><input type='radio' value="1"  name='a9'><?php echo $row["q9ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a9'><?php echo $row["q9ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a9'><?php echo $row["q9ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a9'><?php echo $row["q9ch4"]?></td></tr>
				</table>
              </div>
                <div>&nbsp;</div>
              </fieldset>
		      <br>
              <br>
              <fieldset width="500">
              <div><b style="font-size:17;color:green">&nbsp;</b> <b style="font-size:17;color:green"><?php echo $row["q10"]?></b></div>
                <div style="font-size:8">&nbsp;</div>
              <div style="padding-left:12">
                 <table>
				  <tr><td><input type='radio' value="1"  name='a10'><?php echo $row["q10ch1"]?></td></tr>
                  <br>
                <tr><td><input type='radio' value="2"  name='a10'><?php echo $row["q10ch2"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="3"  name='a10'><?php echo $row["q10ch3"]?></td></tr>
                <br>
               <tr><td><input type='radio' value="4"  name='a10'><?php echo $row["q10ch4"]?></td></tr>
				</table>
              </div>
                <div>&nbsp;</div>
              </fieldset>
		      <div align="center"><br>
	            <label>
	            <Input Name = "Submit" type = "Submit" id="Submit" Value = "Submit">
	            </label>
	            <br>
		        
              </div>
      </form>
			
</div> 
			<!-- / content -->

			<!-- SIDEBAR -->
			<div id="sidebar">
			  <p>&nbsp;</p>
				<p>&nbsp;</p>
<ul id="news">
                    	<li>
							<!-- images must be 54x54px -->
       	  </li>
           	  </ul>

				
			            
		  </div> <!-- / Sidebar -->




			<!-- Footer -->
			<!-- / footer -->


		</div><!-- / wrapper -->
	</div><!-- / container -->


</html>
         
        </div>
      </div>
      <!-- ########### --> 
    </div>
    <!-- ####################################################################################################### -->
    <div class="pagination">
      <ul>
        <li class="prev"><a href="#">&laquo; Previous</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">6</a></li>
        <li class="current">7</li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li class="next"><a href="#">Next &raquo;</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2>University Name Here</h2>
      <address>
      Address Line 1<br />
      Address Line 2<br />
      Town/City<br />
      Postcode/Zip
      </address>
      <ul>
        <li><strong>Tel:</strong> xxxxx xxxxxxxxxx</li>
        <li><strong>Fax:</strong> xxxxx xxxxxxxxxx</li>
        <li class="last"><strong>Email:</strong> <a href="#">contact@mydomain.com</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Administration</h2>
      <ul>
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
        <li><a href="#">Press Release Information</a></li>
        <li><a href="#">Annual Report</a></li>
        <li><a href="#">Financial Statements</a></li>
        <li><a href="#">Job Vacancies</a></li>
        <li class="last"><a href="#">Semester Dates</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Link Block 2</h2>
      <ul>
        <li><a href="#">Schools and Colleges</a></li>
        <li><a href="#">Student Activities</a></li>
        <li><a href="#">Student Affairs</a></li>
        <li><a href="#">Student Development</a></li>
        <li><a href="#">Student Financial Services</a></li>
        <li><a href="#">Student Group Directory</a></li>
        <li><a href="#">Student Life</a></li>
        <li><a href="#">International Students</a></li>
        <li class="last"><a href="#">Global Learning</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Link Block 3</h2>
      <ul>
        <li><a href="#">Academic Advisory</a></li>
        <li><a href="#">Academic Assistance</a></li>
        <li><a href="#">Academic Calendars</a></li>
        <li><a href="#">Academics Office</a></li>
        <li><a href="#">Administration</a></li>
        <li><a href="#">Adult Learners</a></li>
        <li><a href="#">Alumni Chapters</a></li>
        <li><a href="#">Alumni Events</a></li>
        <li class="last"><a href="#">Residential Colleges</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
</body>
</html>