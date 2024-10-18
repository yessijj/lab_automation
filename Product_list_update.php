<?php


		$id = $_GET ['id'];
		$conn = new mysqli("localhost","root","","lab_automation_new");


$sql_select ="SELECT * from product_table where Product_Id = '$id'";
$result = $conn->query($sql_select);

while ($row=$result->fetch_array()) {


      $pname = $row ['Product_name'];
	   $ptype = $row ['Product_type'];
	   $pcode = $row ['Product_code'];
	$rev= $row ['Revision_of_product'];
     $MC = $row ['Manufacture_code'];
}

?>


<?php

$conn = new mysqli("localhost","root","","lab_automation_new");


function checkKey($conn, $randstr){

	$sql = "SELECT * FROM product_table";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		if($row['Product_Id'] == $randstr){

             $keyExists = true;
                      break;

                         }

        else {


                $keyExists = false;



		}
	}
}

function generateKey($conn){

$keyLenght = 12;
$str = "PD1234567890";
$randstr = substr(str_shuffle($str), 0, $keyLenght);
$checkKey = checkKey($conn, $randstr);

while ($checkKey == true) {
	$randstr = substr(str_shuffle($str),0, $keyLenght);
	$checkKey = checkKey($conn, $randstr);
}
return $randstr;

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

	<link rel="stylesheet"  href="tail.select-bootstrap4.css">
	<style type="text/css">

	
		
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
.formBox{
	margin-top: 90px;
	padding: 50px;
}

.search_Select_box{
max-width: 300px;
margin: 70px;
height: 50px;


}

.search_Select_box select{
width: 100%
height: 50px;



}

.search_Select_box button{
width: 100%
height: 50px;
background-color: blue;



}
.formBox  h1{
	margin: 0;
	padding: 0;
	text-align: center;
	margin-bottom: 50px;
	text-transform: uppercase;
	font-size: 48px;
}
.inputBox{
	position: relative;
	box-sizing: border-box;
	margin-bottom: 50px;
}
.inputBox .inputText{
	position: absolute;
    font-size: 24px;
    line-height: 50px;
    transition: .5s;
    opacity: .5;
}
.inputBox .input{
	position: relative;
	width: 100%;
	height: 50px;
	background: transparent;
	border: none;
    outline: none;
    font-size: 24px;
    border-bottom: 1px solid rgba(0,0,0,.5);

}
.focus .inputText{
	transform: translateY(-30px);
	font-size: 18px;
	opacity: 1;
	color: black;

}
textarea{
	height: 100px !important;
}
.button{
	width: 100%;
    height: 50px;
    border: none;
    outline: none;
    background: black;
    color: #fff;
}

#div2{

height: 100%;
position: relative;
font-family: "Lato", sans-serif;
  background-size: cover;
  background-repeat:no-repeat;
background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(61, 121, 178, 0.73)),url('p9.jpg');  background-position: center;
}
.btn btn-primary dropdown-toggle{

width: 50%;

}

body {font-family: Arial, Helvetica, sans-serif;}

.callout {
  position: fixed;
  bottom: 35px;
  right: 20px;
  margin-left: 20px;
  max-width: 300px;
}

.callout-header {
  padding: 25px 15px;
  background: #555;
  font-size: 30px;
  color: white;
}

.callout-container {
  padding: 15px;
  background-color: #ccc;
  color: black
}

.closebtn {
  position: absolute;
  top: 5px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: lightgrey;
}

	</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</head>
<body>

<!------ Include the above in your HEAD tag ---------->





<DIV id="div2">
<div class="container-fluid">
		<div class="container">

			<div class="formBox">
				<form method="post" action="">
						<div class="row">
							<div class="col-sm-12">
								<h2><span style="color:black;">Update The Information.</span></h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox ">
									<input type="text" name="pId" class="input" readonly="" value="<?php echo generateKey($conn);  ?>">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Product Name</div>
									<input type="text" name="pname" class="input" value="<?php echo $pname ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Product Code</div>
									<input type="text" name="pcode" class="input" value="<?php echo $pcode ?>">
								</div>
							</div>

						
						
					<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Manufacture Code</div>
									<input type="text" name="MC" class="input" value="<?php echo $MC ?>">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Revision of Product</div>
									<input type="text" name="Rev" class="input" value="<?php echo $rev ?>">
								</div>
							</div>
						</div>
						<div class="col-sm-12 search_select_box">
								<select id="select1" class="w-100" name="ptype" value="<?php echo $sql_protype ?>">
								<option>Select one from dropdown</option>
								<?php
      
      $rev_code = "SELECT * from product_type";
      $result2 = $conn->query($rev_code);
      while ($row = $result2->fetch_array()) {

      	$product_type = $row['Prod'];

      	?>

      	<option value="<?php echo $product_type?>"><?php echo $product_type; ?></option>
      	<?php
      }

?>
</select>
</div>

								</select>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="btnadd" class="button" value="Update Information">
							</div>
						</div>


				</form>
			</div>
		</div>
	</div>
</DIV>

					
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	 <script type="text/javascript">
	 	$(".input").focus(function() {
	 		$(this).parent().addClass("focus");

	 	})
	 </script>

	 <script type="text/javascript">
	 	
	 	$(document).ready(function(){

$		$('.search_select_box').selectpicker();

	 	})
	 </script>
</body>
</html>


<?php
if (isset($_POST['btnadd'])) {
	
$PID = $_POST['pId'];
$pname = $_POST['pname'];
$pcode = $_POST['pcode'];
$ptype = $_POST['ptype'];
$manufac = $_POST['MC'];
$revision = $_POST['Rev'];

$sql_protype = "SELECT * from product_type where Prod = '$ptype'";
$result = $conn->query($sql_protype);
while ($row = $result->fetch_array()) {

	$protypeid = $row['Product_Id'];

$update = "UPDATE product_table set Product_Id = '$PID', Product_name = '$pname', Product_type = '$ptype', Product_code = '$pcode', Revision_of_product= '$revision',Manufacture_code = '$manufac' where Product_Id = '$PID'";

	if ($conn->query($update)){

		header('Location:Products_list.php');
	}

	else{


		echo "Data updation failed";
	}
}


}

?>