<?php 
if($_POST['user_id']=NULL || $_POST['user_pass']=NULL )
{
echo "<p>"."you have provided insuffcient data"."</p>";
echo "<a href= \"admin_login.php\">Click here to try again</a>";
}
else
{
	$SQL = mysqli_connect('localhost','root','','hookbus_database');
	if(mysqli_connect_errno())
	{
		printf("Connection error!!!Please try again later");
		exit();
	}
	
	$query = "SELECT * FROM user_data WHERE user_id = $_POST['user_id'] AND user_pass = $_POST['user_pass']";
	$res = mysqli_query($SQL,$query);
	$e = mysqli_fetch_row($res);
	//echo $e[0];
	if($e[0])
	{	
		session_start();
		//$R = mysqli_fetch_row($res);
		//echo "hiii".session_id();
		$_SESSION['user_id']=$e[0];
		mysqli_free_result($res);
		mysqli_close($SQL);
		header("Location: sign.php");
	}
	else
	{	mysqli_free_result($res);
		mysqli_close($SQL);
		echo "wrong username or password \n" ;
		
		echo "<a href = \"sign.php\">click to try again</a>";
	}
}
