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
--> 
</style>

</head>

<body class="wrapper">

<!-- container -->
<div id="container">
   
    <!-- header -->
    <div id="header">
    <p class="tollfree">NOOBS</p>
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
	    <li><a href="student_homepage.php">Home</a></li>
			<li><a href="SsendMsgToAdmin.php"> Message to Admin</a></li>
			<li><a href="displayMsgStudent.php"> Display Message</a></li>
			
			
	    
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
   
    <div class="pic"></div>
     <h2>Message Send By <?php session_start(); echo $_SESSION['name']; ?> </h2>
	 
<?php

	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	mysql_select_db("lbms",$con);
	$name=$_SESSION['name'];
	$sql = "select * from message where userid='".$name."'";
	
	$result = mysql_query($sql,$con);
	$sql1 = "select * from message where subject='".$name."'";
	$result1 = mysql_query($sql1,$con);
	
?>
	<table border='1'>
	<tr bgcolor='#00CCFF'>
	 
	<td>
	<?php echo "User";?>
	</td>
	<td>
	<?php echo "Date";?>
	</td>
	
	<td>
	<?php echo "To";?>
	</td>
	<td>
	<?php echo "Message";?>
	</td>
	
	</tr>

	<?php while($obj = mysql_fetch_array($result))
	{ ?>

		<tr>
		
		<td>
		<?php echo $obj['user_id']; ?>
		</td>
		<td>
		<?php echo $obj['date'];?>
		</td>
		<td>
		<?php echo $obj['subject'];?>
		</td>
		
		<td>
		<?php echo $obj['message']; ?>
		</td>
		</tr>
				
	<?php } ?>
	
	</table>
	<h2>Message Send To <?php  echo $_SESSION['name']; ?> </h2>
		<table border='1'>
	<tr bgcolor='#00CCFF'>
	 
	<td>
	<?php echo "User";?>
	</td>
	<td>
	<?php echo "Date";?>
	</td>
	
	<td>
	<?php echo "To";?>
	</td>
	<td>
	<?php echo "Message";?>
	</td>
	
	</tr>

	<?php while($obj = mysql_fetch_array($result1))
	{ ?>

		<tr>
		
		<td>
		<?php echo $obj['user_id']; ?>
		</td>
		<td>
		<?php echo $obj['date'];?>
		</td>
		<td>
		<?php echo $obj['subject'];?>
		</td>
		
		<td>
		<?php echo $obj['message']; ?>
		</td>
		</tr>
				
	<?php } ?>
	
	</table>

  </div>
    <!-- end:mainContent --> 
    
    
    
<br class="clearfloat">

<div id="footer">
    <p>� 2019 - NOOBS </p>
</div>
</div>
<!-- end:container -->


</body>
</html>