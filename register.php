
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>VUI University | Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><img src="../images/logo.jpg" style="border-radius:60%" width="130" height="113" />&nbsp;&nbsp;&nbsp;<a href="../index.html">UNIVERSITY</a></h1>
    </div>
    </form>
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
	  <li><a href="login.php">Examination</a></li>
	  <li class="active"><a href="register.php">Register</a></li>
	  <li><a href="aboutus.php">About Us</a></li>
	  <li><a href="../adminl.php">Administrator</a></li>
    </ul>    <div  class="clear"></div>
  </div>
</div>
<!-- ####################################################################################################### -->
 <div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
   <table><tr><td> <div id="content">
				<h1>About registration </h1>
				<!-- img by foreversouls -->
				<img src="../layout/styles/images/temp/post1.jpg" alt="" width="235" height="135" class="alignleft" />
				<p class="style7"><u>DEAR STUDENTS </u></p>
				<p><strong>Please  fill all the field of registrations form, given in right side of the page. In  that form there are some condition given like (In lower case) it means that  write in small latter ( a b c d ). And if there is not written any things you  can type either in small letter or capital letter.</strong></p>
				<h1 align="center">Advanced Technical Training Center </h1>
				<!-- img by foreversouls -->
				<img src="../layout/styles/images/temp/attc.jpg" alt="" width="583" height="271" class="alignleft" />
				<p>&nbsp;</p>
				<a class="backToTop" href="#" title="Back To Top">&nbsp;</a></div></td><td> <div id="sidebar">
				<h2>Registration		    </h2>
			  <form id="form1" name="form1" method="post" action="register_validate.php">
			
		      <table width="265" height="450" align="center" bgcolor="#A5DBDE">
       
        <tr>
          <td width="99"><div align="left" class="style6">First Name </div>            
            </td>
          <td><label>
            <input name="Fname" type="text" id="Fname" />
          </label></td>
        </tr>
        <tr>
          <td><div align="left" class="style6">Last Name</div></td>
          <td><label>
          <input name="Lname" type="text" id="Lname" />
          </label></td>
        </tr>
		<tr>
          <td><span class="style6">Course</span></td>
          <td><label>
          <select>
		  <option value="#">Select</option>
		  <option value="BCA">BCA</option>
		  <option value="BBA">BBA</option>
		  <option value="MCA">MCA</option>
		  <option value="BTECH">B.Tech</option>
		  </select>
          </label></td>
        </tr>
        <tr>
          <td><div align="left" class="style6">Password</div></td>
          <td><label>
            <input name="Password" type="password" id="Password" />
          </label></td>
        </tr>
        <tr>
          <td height="27"><div align="left" class="style6">Retype Password </div></td>
          <td><label>
          <input name="RetypePassword" type="password" id="RetypePassword" />
          </label></td>
        </tr>
        <tr>
          <td height="43"><div align="left" class="style6">E_mail</div>            
            </td>
          <td><label>
          <input name="emailAddress" type="text" id="emailAddress" placeholder="like-ajay@yahoo.com" />
          </label></td>
        </tr>
        <tr>
          <td><div align="left" class="style6">Gender</div>          
          </td>
          <td><label></label>
            <label>
            <input type="radio" name="gender" value="Male" checked="checked" />Male
			<input type="radio" name="gender" value="Female" />Female
          </label></td>
        </tr>
        <tr>
          <td><span class="style6">Age</span></td>
          <td><label>
          <select>
		  <option value="#">AGE</option>
		  <option value="15">15</option>
		  <option value="16">16</option>
		  <option value="17">17</option>
		  <option value="18">18</option>
		  <option value="19">19</option>
		  <option value="20">20</option>
		  <option value="21">21</option>
		  <option value="22">22</option>
		  <option value="23">23</option>
		  <option value="24">24</option>
		  <option value="25">25</option>
		  <option value="26">26</option>
		  <option value="27">27</option>
		  <option value="28">28</option>
		  <option value="29">29</option>
		  <option value="30">30</option>
		  </select>
          </label></td>
        </tr>
        <tr>
          <td height="29"><div align="left" class="style6">City</div>            
            </td>
          <td><label>
          <input name="City" type="text" id="City" />
          </label></td>
        </tr>
        <tr>
          <td height="61"><div align="left" class="style6">State</div></td>
          <td>
              <input name="State" type="text" id="State" />
			              </td>
        </tr>
        <tr>
          <td height="27"><span class="style6">Country</span></td>
          <td><label>
          <input name="Country" type="text" id="Country" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
              <label>
              <input type="submit" name="Submit" value="Submit" >
              </label>
              <input type="reset" name="Submit2" value="Reset" />
          </div></td>
        </tr>
      </table>
        </form></p> </div> </td>
		</tr></table>
		  <!-- / content -->

			<!-- SIDEBAR -->
		 
		 
			<!-- / Sidebar -->

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