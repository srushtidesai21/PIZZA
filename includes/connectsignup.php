<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="loginsystem";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
	echo "<br><h1>Connected Success</h1>";

}
else{
echo "<br><h1>Connected Success</h1>";
}

?>