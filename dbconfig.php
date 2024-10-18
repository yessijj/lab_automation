<?php
$hostname="localhost";
$username="root";
$password="";
$database="lab_automation";

$con = new mysqli($hostname,$username,$password,$database);
if($con->connect_error){
echo "Error".$con->connect_error;

}

?>