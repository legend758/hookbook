<?php
	
	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('could not connect: ' . mysql_error());
	}
			
	mysql_select_db("hookbus_database",$con);

	$user_id = $_GET["user_id"];	
	

	$sql = "select * FROM booking_history WHERE user_id ='" . $user_id . "' ";	
	$result = mysql_query($sql,$con);
	$sql2 = "select trips_left FROM student_details WHERE user_id ='" . $user_id . "' ";
	$result2 = mysql_query($sql2,$con);
		
	echo "<table border='1'>";
	echo "<tr bgcolor='#00CCFF'>";
	echo "<td>";
	echo "Trips Left";
	echo "</td>";
	echo "</tr>";
	while($obj2 = mysql_fetch_array($result2))
	{
		echo "<tr>";
		echo "<td>";
		echo $obj2["trips_left"];
		echo "</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	
	echo "<table border='1'>";
	echo "<tr bgcolor='#00CCFF'>";
	echo "<td>";
	echo "Student Id";
	echo "</td>";
	echo "<td>";
	echo "Date";
	echo "</td>";
	

	while($obj = mysql_fetch_array($result))
	{
			

		echo "<tr>";
		echo "<td>";
		echo $obj["userid"];
		echo "</td>";
		echo "<td>";
		echo $obj["date"];
		echo "</td>";
		echo "</tr>";		
	}
	echo "</table>";
?>