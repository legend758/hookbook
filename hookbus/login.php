<?php

	$conn = new mysqli('localhost','root','','hookbus_database');
	
	if($conn==null)
	{
		die('could not connect: ' . mysql_error());
	}
			
	$user_id = $_GET["user_id"];
	//$user_name = $_GET["user_name"];	
	$user_pass = $_GET["user_pass"];
	$user_category = $_GET["user_Category"];	
	
	$sql = "select * FROM user_data WHERE user_id='$user_id' and user_pass='$user_pass' and user_category='$user_category'";
	$result= $conn->query($sql);

	$row=$result->fetch_assoc();
	if(!$obj)
	{
		header("location:unknown.html");
	}
	else if($user_category=="student")
	{
		$flag="false";
		//For student....
		session_start();
		$_SESSION['flag']=0;
		$_SESSION['category']=$user_category;	
			$_SESSION['name']=$user_id;	
		header("Location:student_homepage.php");
	}
	else if($user_category=="admin")
	{
		//For Admin..
		session_start();
		$_SESSION['category']=$user_category;
			$_SESSION['name']=$user_id;	
		header("Location:admin_homepage.php");
	}
	else if($user_category=="gate_staff")
	{
		//For Admin..
		session_start();
		$_SESSION['category']=$user_category;	$_SESSION['name']=$user_id;	
		header("Location:gate_staff_homepage.php");
	}
	else
	{
		
	}
?>