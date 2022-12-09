<?php
include("functions.php");
$dblink=db_connect("contactData");
$sql="Select * from `user_input` where 1";
$result=$dblink->query($sql) or
	die("Something went wrong: $sql ".$dblink->error);

while ($data=$result->fetch_array(MYSQLI_ASSOC)){
	echo'<tr><td>'.$data['auto_id'].'</td><td> '.$data['first_name'].'</td><td> '.$data['last_name'].'</td><td> '.$data['email'].'</td>';
	if($data['username']=="")
		echo'<td>N/A</td>';
	else
		echo'<td>'.$data['username'].'</td>';
	echo'<td>'.$data['comments'].'</td></tr>';
}
?>