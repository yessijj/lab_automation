<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$conn = new mysqli("localhost","root","","lab_automation");


function checkKey($conn, $randstr){

	$sql = "SELECT * FROM testing_record_table";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		if($row['Testing_ID'] == $randstr){

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
$str = "TEST1234567890";
$randstr = substr(str_shuffle($str), 0, $keyLenght);
$checkKey = checkKey($conn, $randstr);

while ($checkKey == true) {
	$randstr = substr(str_shuffle($str),0, $keyLenght);
	$checkKey = checkKey($conn, $randstr);
}
return $randstr;

}

?>
<input type="text" class="form-control" id="category" readonly name="cate" value="<?php echo generateKey($conn);  ?>">

</body>
</html>