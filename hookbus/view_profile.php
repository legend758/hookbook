

<!<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOOK BUS</title>
<meta name="Description" content="Model blog" />
<meta name="#" content="#" />

<style type="text/css"> 
<!-- 
@import"style.css";
.style2 {font-size: 16}
.style3 {font-size: 24px}
--> 
</style>

</head>

<body class="wrapper">

<!-- container -->
<div id="container">
   
    <!-- header -->
    <div id="header">
    <p class="tollfree">HOOK BUS</p>
    </div>
    <!-- end:header -->

    <!-- sidebar1 -->
	 <div id="sidebar1">
    <div class="topbox">
    <div class="contbox">
    <div class="cont">
    <h1>&nbsp;</h1>
	<ul id="submenu">
	<li>
	  <ul>
	    
		<li><a href="view_profile.php">My Profile</a></li>
		    
			<li><a href="SsendMsgToAdmin.php"> Message to Admin</a></li>
			<li><a href="displayMsgStudent.php"> Display Message</a></li>
			
			<li><a href="index.php">Logout</a></li>
	 
	  </ul>
	</li>
	</ul>
    </div>
    
    </div></div>
    <div class="fotbox"></div>
    
  </div>
    <!-- end:sidebar1 -->
    <!-- mainContent -->
<div id="mainContent">
   
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Profile</title>
</head>


<?php
// establishing the sql connection
$SQL = mysqli_connect('localhost','root','','hookbus_database');
	if(mysqli_connect_errno())
	{
		printf("connection error!!!...plz try again later");
		exit();
	}
	
session_start();
        $_SESSION["name"]="";
        echo ($_SESSION["name"]!==null)?"":$_SESSION["name"];	

$query = "SELECT * FROM user_data WHERE user_id = '$user_id'";

$res = mysqli_query($SQL,$query);
// to get one row into the varible $e
	$e = mysqli_fetch_array($res);
	// saving all the values into variables
	$name = $e["name"];
	$sex = $e["sex"];
	$contact=$e["contact_no."];
	$mail=$e["mail_id"];
	$dob=$e["dob"];
	$address=$e["address"];
	
	
	
?>




<body style="text-align: center; font-family: Calibri; font-size: 20px; color: #003; font-weight: bold;">

<!-- introducing table for the display of welcome statement with the name of student -->
<p> </p>
<p> </p>
<p> </p>
<p style="color: #000">  Your Profile:</p>
<!-- table to display the User's Booking History-->

  <tr>
    <td><p>
      <?php

echo "<table  border='0'>";

echo "<tr>"."<td width='100px' style='color: #000'>"."Name"."</td>"."<td style='color: #000' width='200px'>"."$name"."</td>"."</tr>" ;
echo "<tr>"."<td width='100px' style='color: #000'>"."Sex"."</td>"."<td style='color: #000' width='200px'>"."$sex"."</td>"."</tr>" ;
echo "<tr>"."<td width='100px' style='color: #000'>"."Contact"."</td>"."<td style='color: #000' width='200px'>"."$contact"."</td>"."</tr>" ;
echo "<tr>"."<td width='100px' style='color: #000'>"."E-mail"."</td>"."<td style='color: #000' width='200px'>"."$mail"."</td>"."</tr>" ;
echo "<tr>"."<td width='100px' style='color: #000'>"."Date of Birth"."</td>"."<td style='color: #000' width='200px'>"."$dob"."</td>"."</tr>" ;
echo "<tr>"."<td width='100px' style='color: #000'>"."Trips Left"."</td>"."<td style='color: #000' width='200px'>"."$trips_left"."</td>"."</tr>" ;


?>
	
	
	
    &nbsp;</p></td>
  </tr>
</table>


<p>&nbsp;</p>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">

<div id="footer">
    <p> 
	 <a href="student_homepage.php">Home</a>
	
	</br> </br> © 2019 - NOOBS </p>
</div>
</div>
<!-- end:container -->



</body>
</html>