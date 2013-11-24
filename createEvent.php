<?php
if(!empty($_POST)){
	
	
	$name = $_POST['Name'];
	$location = $_POST['Location'];
	$description = $_POST['Description'];
	$start_time = $_POST['Start_Time'];
	$end_time = $_POST['End_Time'];
	$holidayID = $_POST['holidayID'];
	$fbID = $_POST['fbID'];

	mysql_connect("localhost","root","");
	mysql_select_db("holidayDB");


	$query = "INSERT INTO events (holidayID, Name, Location, Description, Start_Time, End_Time, fbID) VALUES ('$holidayID', '$name', '$location', '$description', '$start_time', '$end_time', '$fbID')";

	
	mysql_query($query);
	print("Your event has been successfully created");
	mysql_close();
}
?>
