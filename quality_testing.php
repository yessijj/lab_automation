<?php
include'sidenav.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Quality Testing</title>
</head>
<style type="text/css">
	
	#div1{


		background-color: #5EA2C4;
		position: relative;
		height: 600px;
		width: 700px;
		margin-left: 400px;
		margin-top: 10px;
		opacity: 0.8;
		border-radius: 40px;
		border-left-style: outset;
		border-right-style: outset;
		border-top-color: white;
	}
	h3{

		margin-left: 150px;
		position: relative;;
		top:-16px;
		right: 80px;
		color: white;

	}
	.jumbotron{

		background-color: #1675A4;
		color: white;
		height: 100px;
		width: 690px;
		margin-top: 200px;
		border-radius: 40px;
		position: relative;
		top: 2px;
	}
	form{

		top:90px;
		position: relative;
	}
	.button{

		background-color: #1675A4;
		border-style: none;
		border-radius: 30px;
		width: 250px;
		height: 50px;

	}
	
</style>
<body>
<div class="container">
	<div id="div1">
		<div class="jumbotron">
			<center>
		<h3>Please Add The Testing ID</h3>
		</center>

	<div>
		<center>
		<form>
			 <label for="pwd"><h5>Testing ID</h5></label>

        <select name="quality" class="form-control"  > 
<option>Select Testing Id</option>

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





        </select></br></br>
          <button name="btnsel" type="submit" class="button">Generate Report</button>
		</form>
		</center>
	</div>
</div>
	</div>
	

</div>
</body>
</html>
<?php

if (isset($_POST['btnsel'])) {
$qualityy = $_POST['quality'];

$insert_test_id =

}

?>