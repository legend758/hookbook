<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <!---p class="tollfree">Travel Triangle</p---->
    </div>
    <!-- end:header -->

    <!-- sidebar1 --> 
    <div id="sidebar1">
    <div class="topbox">
    <div class="contbox">
    <div class="cont">
    <h1>Main Menu</h1>
  <ul id="submenu">
  <li>
    <ul>
      <li> <a href="sign.php">Sign - In </a> </li> <br />
      <li><a href="index.php">Home </a> </li> 
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
   
    <!-- <div class="pic"><img src="images/pic.jpg" width="150" /></div> -->
     <!-- <h2 class="style3">Welcome to Travel Triangle</h2> -->
      <form name="input"  method="get" action="sign.php">
      <table border="0">
  
  <table id="title">
    <tr>
      <td>First Name:</td>
        <td><input type="text" name="fname" /></td>
      </tr>
    <tr>
      <td>Last Name:</td>
        <td><input type="text" name="lname" /></td>
      </tr>
    <tr>
      <td>Address:</td>
        <td><input type="text" name="address" /></td>
      </tr>
    <tr>
      <td>Username:</td>
        <td><input type="text" name="username" /></td>
      </tr>
    <tr>
      <td>Password:</td>
        <td><input type="password" name="password" /></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Sign Up" /></td>
      </tr>
  </table>
</div>
</form>

<?php
if (isset($_POST['submit']))
    {      
    include 'db.php';

                    $fname=$_POST['fname'];
                            $lname=$_POST['lname'];                 
                    $address=$_POST['address'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];

         mysql_query("INSERT INTO student(fname,lname,address,username,password) 
         VALUES ('$fname','$lname','$address','$username','$password')"); 
            }
?>
</...
    
<br class="clearfloat">

<div id="footer">
     <p>© 2019 - NOOBS </p>
</div>
</div>
<!-- end:container -->


</body>
</html>