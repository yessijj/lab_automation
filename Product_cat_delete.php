<?php
$conn = new mysqli("localhost","root","","lab_automation_new");

$del_id = $_GET['id'];

$sql_query = "DELETE from product_type where Product_Id = '$del_id'";

 if($conn->query($sql_query)){

header('Location:Product_cat_list.php');

 }
else{

	echo "user not deleted";
}
?>