<?php
mysql_connect("localhost","root","");
mysql_select_db("holidayDB");

$query = "SELECT ID, Name, Description, Start_Date, End_Date, Picture FROM holidays ";
$query .= " WHERE Start_Date > CURDATE() OR Start_Date = CURDATE() order by Start_Date";


if(!empty($_POST)){
	$value = $_POST + 25;
	$query .= " LIMIT " .$value;
}

else{
	$query .= " LIMIT 25";
}

$sql = mysql_query($query);


while($row=mysql_fetch_assoc($sql))
//header('Content-type: image/jpg');
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
