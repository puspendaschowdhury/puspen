

<?php
// To FETCH From QuestionBank
include('connect.php');


 
	 $query = mysql_query("SELECT * FROM exam ");
	
	 $rows=mysql_num_rows($query);
	
	   
		
			if($rows ==0)
				{
				 echo"<BR>";
				 echo "Record Not Found: ";
				  }
			else
			{	$row = mysql_fetch_array($query);
				
			
			$Mark=0;
			if($_POST['a1']==$row["a1"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a2']==$row["a2"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a3']==$row["a3"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a4']==$row["a4"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a5']==$row["a5"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a6']==$row["a6"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a7']==$row["a7"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a8']==$row["a8"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a9']==$row["a9"])
				{
				$Mark=$Mark+2;
				}

				if($_POST['a10']==$row["a10"])
				{
				$Mark=$Mark+2;
				}
				
				
				
			
				header("location:studentresult.php");
    		 //echo $row['A1'];	
		} 
		//echo $MarkScore;
		
		//Result PASS / FAIL Validation
	if ($Mark <=7)
	{
		$Result = "FAIL";
	}
	else
	{
		$Result = "PASS ";
	}
	
		
	
		
		
		 mysql_query("INSERT INTO `exam`.`result` (`id`, `uid`, `marks`, `result`) VALUES (NULL, '', '$Mark', '$Result');");

	
 ?>
