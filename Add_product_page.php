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

	
		 #div3{

background-color: #1f6383;
height: 100px;
width: 100%;

position: relative;

}
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
    background: #1f6383;
    color: #fff;
}

#div2{

height: 100%;
position: relative;
font-family: "Lato", sans-serif;
  background-size: cover;
  background-repeat:no-repeat;
  background-attachment: fixed;
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
#btnn
{
	margin-top: 20px;
	margin-left: 250px;
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


<div class="container-fluid" id="div3">
    <div class="row">
      <div class="col-sm-5">
        
        <img src="logo2.jpeg" alt="logo">
      </div>
      <div class="col-sm-2">

        </div>
        <div class="col-sm-5">

<a href="Dashboard.php" class="btn btn-info btn-lg" id="btnn">
          <span class="glyphicon glyphicon-log-out"></span> Back to Dashboard
        </a>
        </div>
    
  </div>
</div>


<DIV id="div2">
<div class="container-fluid">
		<div class="container">

			<div class="formBox">
				<form method="post" action="">
						<div class="row">
							<div class="col-sm-12">
								<h1><span style="color:black;">ADD PRODUCT HERE</span></h1>
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
									<input type="text" name="pname" class="input">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Product Code</div>
									<input type="text" name="pcode" class="input">
								</div>
							</div>

						
						
					<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Manufacture Code</div>
									<input type="text" name="MC" class="input">
								</div>
							</div>

							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Revision of Product</div>
									<input type="text" name="Rev" class="input">
								</div>
							</div>
						</div>
						<div class="col-sm-12 search_select_box">
								<select id="select1" class="w-100" name="ptype">
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
								<input type="submit" name="btnadd" class="button" value="ADD YOUR PRODUCT">
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

$insert_product = "INSERT into product_table(Product_Id,Product_name,Product_code,Product_type,Manufacture_code,Revision_of_product) values ('$PID', '$pname', '$pcode','$protypeid', '$manufac', '$revision')";
if($conn->query($insert_product)){


	echo "added";
}


else{


	echo "not added";
}

}


}

?>