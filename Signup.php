<?php
include "dbconnection.php";
$name = "'".(string)$_POST["name"]."'";
$Email = "'".(string)$_POST["email"]."'";
$pass = "'".(string)$_POST["password"]. "'";


/*if($pass!=$pass2)
{
	echo "password does not match";
	
	exit;
}*/


$sql = "INSERT INTO signup (FirstLast,Email,Password) VALUES ($name,$Email,$pass)";
  if ($conn->query($sql) == TRUE) {
    header("Location:/QuizRank/home.html");
    exit;

} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>