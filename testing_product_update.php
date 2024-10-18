<?php

ob_start();


    $id = $_GET ['id'];
    $conn = new mysqli("localhost","root","","lab_automation_new");


$sql_select ="SELECT * from testing_record_table where Testing_Id = '$id'";
$result = $conn->query($sql_select);

while ($row=$result->fetch_array()) {


      $pid = $row ['Product_Id'];
     $Testname = $row ['Test_name'];
     $date_col = $row ['Date_col'];
  $Product_type= $row ['Product_type'];
     $Prdouct_status = $row ['Prdouct_status'];
 $Tester_name = $row ['Tester_name'];
     $rev = $row ['Reviews'];

}


?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500&family=EB+Garamond:wght@401&display=swap" rel="stylesheet">

  <style type="text/css">

    body{

      font-family: "Lato", sans-serif;
  background-size: cover;
  height: 100vh;
  background-repeat: repeat;
 background-image:linear-gradient(rgba(0,0,0,0.52),rgba(0,0,0,0.73)),url(p5.jpg);
  background-position: center;
    }
#div1{

  background-image: linear-gradient(to right, #104577 , #254D73);
position: relative;
height: 993px;
width: 1100px;
margin-left: 80px;
border-style:groove;
margin-top: 80px;


    }

    #myCarousel{

position: relative;
height: 1000px;
width: 600px;

border-radius: 50px;


    }
#date{

  color: black;
}



  #
    .jumbotron{

      position: relative;
      height: 20px;
      width: 550px;
      margin-bottom: 100px;
    }

    textarea {
  resize: none;
}

#div4
{
  background-image: linear-gradient(to right, #104577 , #254D73);
position: relative;
height: 808px;
width: 400px;
margin-left: 590px;
margin-top: -920px;
border-radius: 40px;

}

.site-footer
{
  background-color:#247095;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  max-width: 100%;
  color:white;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:white;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:white;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}

.form-group{

color: white;'
font-weight: 40px;

}
#btnn{

  margin-left: 350px;
  margin-top: 25px
}

    #div3{

background-color: #247095;
height: 100px;
width: 100%;

position: relative;

}


  </style>
</head>
<body>





<?php

$conn = new mysqli("localhost","root","","lab_automation_new");


function checkKey($conn, $randstr){

  $sql = "SELECT * FROM testing_record_table";
  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) {
    if($row['Testing_Id'] == $randstr){

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
$str = "Test1234567890";
$randstr = substr(str_shuffle($str), 0, $keyLenght);
$checkKey = checkKey($conn, $randstr);

while ($checkKey == true) {
  $randstr = substr(str_shuffle($str),0, $keyLenght);
  $checkKey = checkKey($conn, $randstr);
}
return $randstr;

}

?>



  <center>
  
</center>
<div class="container-fluid" id="div3">
    <div class="row">
      <div class="col-sm-5">
        
        <img src="logo2.jpeg" alt="logo">
      </div>
      <div class="col-sm-2">

        </div>
        <div class="col-sm-5">
<div class="col-sm-5">

<a href="logout.php" class="btn btn-info btn-lg" id="btnn" name="logout">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
                </div>
        

        </div>
    
  </div>
</div>

</div>
  <div id=div1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" time-interval="2000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active" style="border-radius: 30px;">
        <img src="pp.jpg" alt="Los Angeles" style="width:400px height:900px;">
      </div>

      <div class="item">
        <img src="p3.jpg" alt="Chicago" style="width:400px height:900px;">
      </div>
    
      <div class="item">
        <img src="p4.jpg" alt="New york" style="width:400px height:900px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<center>

      
<div id="div4">
  <h2 id="H1"><span style="color: black; margin-top: 200px; margin-left:10px; font-family: 'EB Garamond', serif;">PLEASE UPDATE PRODUCT DATA</span></h2></br>

  <form action="" method="post" enctype="multipart/form-data">
      <label for="pwd"> Testing ID</label>

    <input type="text" class="form-control" id="category" readonly name="testingid" value="<?php echo generateKey($conn);  ?>">

    


    <div class="form-group">
      <label for="name">Product ID:</label>
      <select name="productid" class="form-control" value="<?php echo $pid; ?>" placeholder="add category ">
      <option>Select any one</option> 
          <?php
      
      $sel_proID = "SELECT * from product_table";
      $result = $conn->query($sel_proID);
      while ($row = $result->fetch_array()) {

        $product_id = $row['Product_Id'];

        ?>

        <option value="<?php echo $product_id ?>"><?php echo $product_id; ?></option>

        <?php
      }

?>

        </select> 
       </div>


   
    
   

      <div class="form-group">
      <label for="pwd">Test Name</label>
<select name="testname" class="form-control" value="Testname" placeholder="add category "> 
  <option>Select kind of test</option>

          <?php
      
      $test_tab = "SELECT * from test_name_table";
      $result3 = $conn->query($test_tab);
      while ($row = $result3->fetch_array()) {

        $test_name = $row['Test_name'];

        ?>

        <option value="<?php echo $test_name?>"><?php echo $test_name; ?></option>
        <?php
      }

?>

        </select>    
    </div>

    <div class="form-group">
      <label for="name">Date and time:</label>
  <input type="datetime-local" id="date" name="datetime" value="<?php echo $date_col; ?>" />
</div>


     <div class="form-group">
      <label for="pwd">Product status:</label>
      <input type="text" class="form-control"  placeholder="Enter product author" name="status" value="<?php echo $date_col;  ?>" />
    </div>

      <div class="form-group">
      <label for="pwd"> Type of product:</label>
<select name="type" class="form-control" value="<?php echo $Product_type ?>" placeholder="add category "> 
  <option>Select any one</option>
          <?php
      
      $pro_Type = "SELECT * from product_type";
      $result5 = $conn->query($pro_Type);
      while ($row = $result5->fetch_array()) {

        $type = $row['Prod'];

        ?>

        <option value="<?php echo $type?>"><?php echo $type; ?></option>
        <?php
      }

?>

        </select>    </div>

 <div class="form-group">
      <label for="pwd"> Tester name</label>
<select name="tester" class="form-control" value="Tester_name" placeholder="add category ">
<option>Select any one</option> 
          <?php
      
      $tester_name = "SELECT * from tester_table";
      $result4 = $conn->query($tester_name);
      while ($row = $result4->fetch_array()) {

        $tester_name = $row['Tester_name'];

        ?>

        <option value="<?php echo $tester_name?>"><?php echo $tester_name; ?></option>
        <?php
      }

?>

        </select>   
    </div>

    

    <div class="form-group">
      <label for="pwd"> Reveiw</label>
<textarea placeholder="Please Enter your reviews" class="form-control" name="reviews" value="<?php echo $rev; ?>"></textarea>   
 </div>



    <button type="submit" class="btn btn-default" name="btnsub">Send Product For Test</button>
  </form>


</div>  
</center>

</div>

<footer class="site-footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</body>
</html>


<?php
if (isset($_POST['btnsub'])) {

  $test_id = $_POST['testingid'];
  $pro_id = $_POST['productid'];
  $testname = $_POST['testname'];
  $date = $_POST['datetime'];
    $pro_stat = $_POST['status'];
      $pro_type = $_POST['type'];
    $tester = $_POST['tester'];
    $rev = $_POST['reviews'];
    



$sql_pro_id = "SELECT * from product_table where Product_Id = '$pro_id'";
$result1 = $conn->query($sql_pro_id);
while ($row = $result1->fetch_array()) {

  $Product_id = $row['Product_Id'];
}


$sql_testname = "SELECT * from test_name_table where Test_name = '$testname'";
$result2 = $conn->query($sql_testname);
while ($row = $result2->fetch_array()) {

  $test_name = $row['Test_Id'];
}


$sql_protype = "SELECT * from product_type where Prod = '$pro_type'";
$result3 = $conn->query($sql_protype);
while ($row = $result3->fetch_array()) {

  $protype = $row['Product_Id'];
}


$sql_tester = "SELECT * from tester_table where Tester_name = '$tester'";
$result4 = $conn->query($sql_tester);
while ($row = $result4->fetch_array()) {

  $testers = $row['Tester_name'];
}

$update_data = "UPDATE testing_record_table set Testing_Id ='$test_id',Product_Id ='$pro_id',Test_name = '$testname',Date_col = '$date',Prdouct_status = '$pro_stat',Product_type= '$pro_type',Tester_name = '$tester',Reveiw = '$rev' where Testing_Id ='$test_id'";

if($conn->query($update_data)){


  header('Location:testing_product_list.php');
}
else{

  echo "Not inserted";
}

}
?>

