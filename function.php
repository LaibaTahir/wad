<?php
   require "connection_db.php";
   function getcats(){
    global $con;
    $getcatquery= "select * from categories";
    $result= mysqli_query($con,$getcatquery);
    while($row= mysqli_fetch_assoc($result)){
	$title= $row['Cat_text'];
	$id= $row['Cat_id'];
	echo "<li><a class='nav-link' href='#'>$title</a></li>";
	}
}


?>