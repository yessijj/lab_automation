<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
    <style type="text/css">

*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 70%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;

        margin-left: 350px;

}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #247095;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 90px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
  
.jumbotron{

margin-left: 500px;
background-color: #247095;
opacity: 0.7;
margin-top: 40px;
    width: 50%;
    margin-right: 100px;
    position: relative;
    height: 100px;
}

h1{
margin-bottom: 400px;
margin-left: -5px;
top: 20;
position: relative;
margin-top: -24px;

}

        html,body {
  font-family: "Lato", sans-serif;
  background-size: cover;
  height: 100vh;
  background-repeat: no-repeat;
  background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.52), rgba(61, 121, 178, 0.73)),url(p1.jpg);  background-position: center;

  background-position: center;
  background-attachment:fixed;
background-repeat:no-repeat;
background-size:cover;
margin:0px;
padding:0px;

}

        #div3{

background-color: #247095;
height: 100px;
width: 100%;

position: relative;



}

#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}


/* Fixed sidenav, full height */
.sidenav {
  height: 90%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 10;
  left: 0;
    opacity: 0.8;

  background-color:#247095;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #FBFCFC  ;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color:white;
  background-color: #2E5C73
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: 5897C0;
  color: white;
}


.dropdown-container {
  display: none;
  background-color: #5897C0;
  padding-left: 8px;
}

.fa-caret-down {
  float: right;
  padding-right: 8px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

    </style>
    <title></title>
</head>
<body>
<div class="container-fluid" id="div3">
        <div class="row">
            <div class="col-sm-5">
                
                <img src="logo2.jpeg" alt="logo">
            </div>
            <div class="col-sm-2">

                </div>
                <div class="col-sm-5">


                </div>
        
    </div>
</div>

</div>
 
<div class="sidenav">
  
  
  <a href="home.php">Home</a>
    <a href="#services">Products</a>
  <a href="#clients">Re-manufcaturing products</a>
  <a href="#contact">Testing Products</a>
              <a href="Add_Product_for_test.php">Add Product For Test</a>
<button class="dropdown-btn">Details<i class="fa fa-caret-down"></i>
  </button>

<div class="dropdown-container">
    <a href="Products_list.php">Product List</a>
    <a href="Product_cat_list.php">Product Categories</a>
        <a href="circuit_testing.php">Testing Products</a>
    <a href="Testers_list.php">Testers</a>
    <a href="test_name_details.php">Test names</a>

    </div>


                <button class="dropdown-btn">Testing Types
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="quality_testing.php">Quality testing</a>
    <a href="circuit_testing.php">Circuit testing</a>
    </div>

    <a href="Add_tester.php">Add Tester Name</a>
  <a href="Add_test_name.php">Add Test Name</a>
    <a href="Add_Product_page.php">Add New Product</a>
      <a href="Add_Product_type.php">Add Product Type</a>
  <a href="logout.php">Logout</a>

</div>

                
<center>
<div class="jumbotron">
<h1 style="font-family: 'Quantico', sans-serif; color: white;">Testers</h1>
</div>


    <div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Tester Id</th>
            <th>Tester Name</th>

              <th>Delete</th>
            <th>Update</th>

            <?php
$conn = new mysqli("localhost","root","","lab_automation_new");


$sql_fetch = "SELECT * from tester_table";
$result = $conn->query($sql_fetch);
while ($row=$result->fetch_array()) {

    $id = $row['Tester_Id'];   
    $name = $row['Tester_name'];
    





            ?>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php  echo $name ?></td>
             \


        <td><button class="btn btn-danger" name="btndel" type="submit" value=""><a href="testers_list_delete.php?id=<?php echo $id ?>">Delete</a></button></td>
            <td><button class="btn btn-success" name="btnupd" type="submit" value=""><a href="Testers_list_update.php?id=<?php echo $id ?>">Update</a></button></td>

            
        </tr>
       
           
        <?php

}
        ?>
        <tbody>
    </table>
</div>
      </center>
    </tbody>
  </table>
 </div> 

 <script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html>

