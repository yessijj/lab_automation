<!DOCTYPE html>
<html>
<head>


	 <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@1,500&family=Cormorant:wght@300&display=swap" rel="stylesheet">
	<title></title>
	<style type="text/css">
		
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800%7CRaleway:100,200,300,400,600,700,800,900%7CMontserrat:100,200,300,400,500,600,700,800,900');

// Variables
$font-family-base : 'Raleway', sans-serif;
$font-family-head-base : 'Nothing You Could Do', cursive; // Custom
$font-family-lead-base : 'Montserrat', sans-serif; // Custom
// colors
$white:    #fff !default;
$warning : #ffc107;
// Font Weight Base
$font-weight-light:           100 !default;
$font-weight-normal:          500 !default;
$font-weight-bold:            700 !default;
$font-weight-bolder:          900 !default;
// Box Shadow Placeholer and Class
// -- Placeholder -- box shadow default
%box-shadow {
	box-shadow: 0px 0px 18px -3px rgba(143, 143, 143, .50);
}
%box-shadow-hover {
	box-shadow: 0px 0px 20px -3px rgba(143, 143, 143, .75);
}
// -- Placeholder -- box shadow dark
%box-shadow-dark {
	box-shadow: 3px 3px 11px -3px rgba(0, 0, 0, .25);
}
%box-shadow-dark-hover {
	box-shadow: 3px 3px 11px -3px rgba(0, 0, 0, .75);
}
// -- Class Default -- Box Shadow Default Class
.box-shadow {
	@extend %box-shadow;
}
// -- Class Dark -- Box Shadow Dark Class
.box-shadow-dark {
	@extend %box-shadow-dark;
}

body { background-color: yellow; font-family: 'Open Sans', Arial, Verdana; }
section { padding-top: 2rem; padding-bottom: 2rem; }
h6 { color: #990000; }
// Adding font-weight-bolder
.font-weight-bolder {
  font-weight: $font-weight-bolder;
}
// Display override
.display-1, .display-2, .display-3, .display-4 {
  font-weight: 900;
}
.heading {
	&-big {
		font-weight: 800;
		text-transform: uppercase;
		color: red;
		margin: 0;
		padding: .15rem 0;
		line-height: 1.2;
		font-size: 2rem;
		&-square { padding: 1rem 1rem; border: 10px solid red; margin: .5rem auto 1rem auto; }
		transition: color .5s ease-in, border-color .5s ease-in-out;
		&:hover {
			color: #ff9900;			
			border-color: #ff9900;
		}
	}
}

.card {
  transition: .5s ease;
  border-radius: 0;
  transform: perspective(3em) rotateX(0deg) rotateY(-1.175deg) rotateZ(-1deg);
  &-header {
    border-radius: 0;
  }
  &-footer {
    padding-top:1rem;
    padding-bottom:1rem;
  }
  &-header, &-footer {
    transition: .5s ease;
  }
  &:hover {
    @extend %box-shadow-hover;        
    border-color:darken($warning,0%);
	 transform: perspective(0em) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
    .card-header, .card-footer {
      color: darken($warning,15%);
      border-color: darken($warning,0%);
      background-color: lighten($warning,35%);
    }
    .promotion-promo {
      transform: scale(1.175) translateY(2.5px);
      transform-origin: left center;
    }
    .promotion-price {
      transform: translate(2.5px,17.5px) scale(1.15);
      transform-origin: center right;
    }
  }
  &-body {
    position: relative;
    z-index: 0;
    overflow: hidden;
    padding-top: 2rem;
    padding-bottom: 2rem;
  }
  .btn {
    font-weight: bold;
    text-transform: uppercase;
  }
}

.promotion {
  &-promo {
		font-weight: $font-weight-bold;
		font-size: 1.15rem;
		color: $warning;
		font-family: $font-family-lead-base;
		text-decoration: line-through;
		transition: .25s linear;
	}
  &-price {
		position: absolute;
		bottom: 0;
		right: 0;
		background: $warning;
		width: 92px;
		height: 92px;
		padding-bottom: 0rem;
		padding-top: 1.25rem;
		text-align: center;
		font-weight: $font-weight-bold;
		font-family: $font-family-lead-base;
		font-size: 1.1rem;
		border-radius: 5rem;
		color: $white;
		z-index: -1;
		transform: translate(5px,27.5px) rotate(-9deg);
      border: 1px dashed $white;
      transition: .25s linear;
      line-height: 1.15;
    &-desc {
      padding: 0;
      margin: 0 auto;
      text-transform: uppercase;
      font-size: .9rem;
      display: block;
    }
    &-text { 
      padding: 0;
      margin: 0 auto;
      font-weight: $font-weight-bolder;
    }
	}
}

.card-animate {
	counter-reset: section;
	.card-body {
		&:before {
			transition: .5s ease;
			counter-increment: section;
			content: "" counter(section) "";
			display: block;
			font-size: 15rem;
			font-weight: 900;
			position: absolute;
			bottom: 5rem;
			line-height: 0;
			left: -.85rem;
			padding: 0;
			margin: 0;
			color: rgba(0,0,0,.10);
			z-index: 0;
		}
	}
	.card {
		&:hover {
			.card-body {
				&:before {
					transform: translate(10px,-10px);
				}
			}
		}
	}
	.card-text {
		margin-top: 2rem;
		margin-bottom: 2rem;
	}
	.card-title {
		font-weight: 900;
		text-transform: uppercase;
	}
}

		body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}

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
  transition: 2s;
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

#img1{


  border-radius: 50px;
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
}body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}

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
  transition: 2s;
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

#img1{


  border-radius: 50px;
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
}
	</style>
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

<a href="#" class="btn btn-info btn-lg" id="btnn">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
                </div>
        
    </div>
</div>

</div>

<div class="navbar">
  <a class="active" href="home.php">Home</a> 
  <a href="Report_page.php">Fetch Report</a> 
  <a href="products.php">Testing Products</a> 
  <a href="faulty.php">Faulty</a>
</div>

<div class="btn-group mt-2 mb-4" role="group" aria-label="actionButtons">
  
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

<!-- HTML Setup -->
<section>
	<!-- heading -->
	<div class="container">
		<div class="row">			
			<div class="mx-auto">
				<div class="col-lg-12">				
					<h3 class="display-2 heading-big heading-big-square text-center">Products Under Testing Process</h1>										
				</div>
			</div>
		</div>
	</div>
	
	<!-- cards -->
	<div class="container">
		<div class="row">	
		

			<div class="mx-auto">
				<div class="col-lg-12">
					<?php
$conn = new mysqli("localhost","root","","lab_automation_new");

$sql = "SELECT * from testing_record_table";
$result = $conn->query($sql);

while ($row = $result->fetch_array()) {

	$testid = $row['Testing_Id'];
	$proid = $row['Product_Id'];
	$date = $row['Date_col'];
	$stat = $row['Prdouct_status'];

	?>

					<div class="text-center my-3">
						<div class="card-deck no-gutters">

							<div class="col-12 col-sm-6 col-md-6 col-lg-3">
								<div class="card h-100 mb-4">                    
									<div class="card-header">                                
										<h5 class="card-title m-0 p-0 font-weight-bolder text-secondary"><?php echo $testid; ?></h5>
									</div>
									<div class="card-body text-left">
										<p class="card-text">Product Id =<?php echo $proid;  ?> </p>
										<span class="font-lead-base font-weight-bold"><?php  echo $date;?></span>
										<div class="promotion-promo"><?php echo $stat;  ?></div>
										
									</div>
									<div class="card-footer"><a href="#" class="btn btn-info">See Details</a></div>
								</div>
							</div>

							
			</div>
		</div>		
	</div>
</div>
</div>
<?php


}

?>
</section>
</body>
</html>