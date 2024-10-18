<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
	<title></title>
	<style type="text/css">
		body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 10%;
  }
  .col-2 {
    flex-basis: 40%;
  }
  .col-3 {
    flex-basis: 25%;
  }
  .col-4 {
    flex-basis: 25%;
  }
  
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}

* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #5bc0de;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #247095;
}



@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
#btnn{
position: relative;
margin-left: 370px;
margin-top: 20px;

}

		#div3{

background-color: #247095;
height: 100px;
width: 100%;

position: relative;

}


/*//////////////////////////////////////////////////////////////////
[ FONT ]*/


@import "compass/css3";

// More practical CSS...
// using mobile first method (IE8,7 requires respond.js polyfill https://github.com/scottjehl/Respond)

$breakpoint-alpha: 480px; // adjust to your needs

.rwd-table {
  margin: 1em 0;
  min-width: 300px; // adjust to your needs
  
  tr {
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    display: none; // for accessibility, use a visually hidden method here instead! Thanks, reddit!   
  }
  
  td {
    display: block; 
    
    &:first-child {
      padding-top: .5em;
    }
    &:last-child {
      padding-bottom: .5em;
    }

    &:before {
      content: attr(data-th)": "; // who knew you could do this? The internet, that's who.
      font-weight: bold;

      // optional stuff to make it look nicer
      width: 6.5em; // magic number :( adjust according to your own content
      display: inline-block;
      // end options
      
      @media (min-width: $breakpoint-alpha) {
        display: none;
      }
    }
  }
  
  th, td {
    text-align: left;
    
    @media (min-width: $breakpoint-alpha) {
      display: table-cell;
      padding: .25em .5em;
      
      &:first-child {
        padding-left: 0;
      }
      
      &:last-child {
        padding-right: 0;
      }
    }

  }
  
  
}


// presentational styling

@import 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700';

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #eee;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
  tr {
    border-color: lighten(#34495E, 10%);
  }
  th, td {
    margin: .5em 1em;
    @media (min-width: $breakpoint-alpha) { 
      padding: 1em !important; 
    }
  }
  th, td:before {
    color: #dd5;
  }
}

body {
	background: linear-gradient(-45deg, #4d7688, #247095, #00d4ff, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

#div4{


	height: 400px;
	width: 50%;
	border-right-style:ridge;
	margin-top: 20px;
	border-color: white;
	border-radius: 30px;
	border-width: 10px;
	border-left-style: ridge;
	border-top-style: ridge;
	border-bottom-style: ridge;
	</style>

</head>
<body>


	<?php

$prName = $_POST['sel'];




	?>
<div class="container-fluid" id="div3">
        <div class="row">
            <div class="col-sm-5">
                
                <img src="logo2.jpeg" alt="logo">
            </div>
            <div class="col-sm-2">

                </div>
                <div class="col-sm-5">

<a href="logout.php" class="btn btn-info btn-lg" id="btnn">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
                </div>
        
    </div>
</div>

</div>

<div class="navbar">
  <a class="active" href="home.php">Home</a> 
  <a href="Report_page.php">Fetch Report</a> 
  <a href="Products.php">Testing Products</a> 
  <a href="faulty.php">Faulty</a>
</div>

<div class="btn-group mt-2 mb-4" role="group" aria-label="actionButtons">
	
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
<center>
<div class="container-fluid">
	
	

</div>
<div class="container">

	<table class="rwd-table">
  <tr>
    <th>Testing Id</th>
    <th>Product Id</th>
    <th>Status</th>
    <th>Tester</th>
        <th>Review</th>
    <th>Product Code</th>
    <th>Product Name</th>
<?php
$conn = new mysqli("localhost","root","","lab_automation_new");


$sql = "SELECT * from product_table where Product_name = '$prName'";
$result1 = $conn->query($sql);

$row1 = $result1->fetch_array();

$pr_id = $row1['Product_Id'];


$fetch_details = "SELECT testing_record_table.Testing_Id, testing_record_table.Product_Id,testing_record_table.Date_col,testing_record_table.Prdouct_status,testing_record_table.Tester_name,testing_record_table.Reviews,product_table.Product_code,product_table.Product_name from testing_record_table  join product_table on testing_record_table.Product_Id = product_table.Product_Id and product_table.Product_Id = '$pr_id'";

$result = $conn->query($fetch_details);
 while ($row = $result->fetch_array()) {

$testid = $row['Testing_Id'];
$prodid = $row['Product_Id'];
$status = $row['Prdouct_status'];
$Tester = $row['Tester_name'];
$rev = $row['Reviews'];
$procode = $row['Product_code'];
$proname = $row['Product_name'];





			?>
  </tr>
  <tr>
    <td data-th="Movie Title"><?php echo $testid;  ?></td>
    <td data-th="Genre"><?php echo $prodid;  ?></td>
    <td data-th="Year"><?php echo $status;  ?></td>
    <td data-th="Gross"><?php echo $Tester;  ?></td>
        <td data-th="Gross"><?php echo $rev;  ?></td>
    <td data-th="Gross"><?php echo $procode;  ?></td>
        <td data-th="Gross"><?php echo $proname;  ?></td>


  </tr>

  <?php

}
  ?>
  </table>
  
</div>
</center>

</body>
</html>




