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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <title></title>
  <style type="text/css">
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
}

.carousel {
  width:100%;
  height:200px;
}
.wrapper{
background-attachment:fixed;
margin:0px;
padding:0px;

  background-image:linear-gradient(252deg, rgba(245, 246, 252, 0.4), rgba(61, 121, 178, 0.73)),url(p1.jpg); 
  background-repeat: no-repeat;
  opacity: 5;
  background-size: cover;
height: 100vh;
width: 100%;
}
.container-fluid .wrapper .center{
position: absolute;
top: 80%;
left:50%;
transform: translate(-50%, -50%);

}

.center h2{


  color: white;
  width: 900px;
  text-align: center;
  font-family: 40px;
  margin-right: 100px;
}

.center p{


  color: white;

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
  <a href="products.php">Testing Products</a> 
  <a href="faulty.php">Faulty</a>
</div>

<div class="btn-group mt-2 mb-4" role="group" aria-label="actionButtons">
  
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
<div class="container-fluid">
  <div class="wrapper">
    <div class="center">
      <h2>Welcome to SRS Electrical Appliances</h2>
    <p style="font-family: 'Cormorant', serif;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      
    </div>
    
</div>
</div>
</br></br>
<div class="jumbotron" style=" border-color: white; border-width: 10px; background-image: url('p0.jpg'); background-size: cover;">
  <center>
  <h2 style="font-family: 'Manrope', sans-serif; color: white; ">WE OFFER AUTHENTIC LAB RESULTS</h2>
</center>
</div>
<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="pic11.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="pic12.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="p13.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</body>
<script>
Swal.fire(
  'Sweet Alert ?',
  'Muhammad Ubaid Ghouri',
  'Any Question??'
)
</script>
</html>



