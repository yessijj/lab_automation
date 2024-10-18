<?php


    $id = $_GET ['id'];
$conn = new mysqli("localhost","root","","lab_automation_new");   

$sql_select ="SELECT * from product_type where Product_Id = '$id'";
$result = $conn->query($sql_select);

while ($row=$result->fetch_array()) {


      $pname = $row ['Prod'];
    }

?>



<?php

$conn = new mysqli("localhost","root","","lab_automation_new");   

$Id_query = "SELECT * from product_type";
$result = mysqli_query($conn,$Id_query);
while($row = mysqli_fetch_array($result))
{

$ptype_id = $row['Product_Id'];

}
if($ptype_id == "")
{

  
$producttype = "PROTYPE1";

}
else {

  $producttype = substr($ptype_id , 7);
  $producttype = intval($producttype);
 $producttype  = "PROTYPE" . ($producttype + 1);
}

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
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
font-family: "Lato", sans-serif;
  background-size: cover;
  background-repeat:no-repeat;
background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(61, 121, 178, 0.73)),url('p9.jpg');  background-position: center;}
#in3{


  border-style: dotted;
}

  </style>

</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->





<DIV id="div2">
<div class="container-fluid">
    <div class="container">

      <div class="formBox">
        <form method="post" action="">
            <div class="row">
              <div class="col-sm-12">
                <h1><span style="color:black;">Update Product Category Information</span></h1>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="inputBox ">
                  <div class="inputText">Product Type ID</div>
                  <input type="text" name="ptypeid" class="input" readonly="" value="<?php echo $producttype;?>">
                </div>
              </div>

              <div class="col-sm-12">
                <div class="inputBox">
                  <div class="inputText">Product Type</div>
                  <input type="text" name="ptype" class="input" value="<?php echo $pname ?>">
                </div>
              </div>
            </div>

            

            <div class="row">
              <div class="col-sm-12">
                <input type="submit" name="btntype" class="button" value="Update Information">
              </div>
            </div>


        </form>




        <?php 
if (isset($_POST['btntype'])) {

$pcId = $_POST['ptypeid'];
$pro_type = $_POST['ptype'];


$Update = "UPDATE product_type set Prod = '$pro_type' where Product_Id ='pcId'";

if ($conn->query($Update)) {

echo "Product_cat_list.php";
  
}

  else{


    echo "failed";
  }
}


 ?>
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
</body>
</html>


