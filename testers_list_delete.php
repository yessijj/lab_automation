<?php
$conn = new mysqli("localhost","root","","lab_automation_new");

$del_id = $_GET['id'];

$sql_query = "DELETE from tester_table where Tester_Id = '$del_id'";

 if($conn->query($sql_query)){

header('Location:Testers_list.php');

 }
else{

	echo "user not deleted";
}
?>