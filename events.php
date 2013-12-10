<?php
mysql_connect("localhost","root","");
mysql_select_db("holidayDB");

$query = "SELECT eventID, Name, Description FROM events ";

if(!empty($_POST)){

foreach($_POST as $key => $value){
$holidayID = $value;
}
$query .= "WHERE holidayID =".$holidayID;

$sql = mysql_query($query);
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
}

mysql_close();

?>
