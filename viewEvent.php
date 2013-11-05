<?php
mysql_connect("localhost","root","");
mysql_select_db("holidayDB");

$query = "SELECT Name, Description, Location, Start_Time, End_Time FROM events ";

if(!empty($_POST)){

	$query .= "WHERE eventID = ".$_POST;
	
	$sql = mysql_query($query);
	while($row=mysql_fetch_assoc($sql))
	$output[]=$row;
	print(json_encode($output));
}

mysql_close();
?>