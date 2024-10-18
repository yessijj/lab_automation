<?php
$conn = new mysqli("localhost","root","","lab_automation_new");

$del_id = $_GET['id'];

$sql_query = "DELETE from test_name_table where Test_Id = '$del_id'";

 if($conn->query($sql_query)){

header('Location:test_name_details.php');

 }
else{

	echo "user not deleted";
}
?>