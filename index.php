<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favi.ico" />

    <title>Mirhe Dillara</title>
	<style>
   .start{

   background-color:#000000;
   
   }
   .topmenu{
    
	padding:50px 40px;
       
	 float:right;
	   
   }
   .topmenu a{
   padding:2px;
   }
           .logo{
		   
		   top:10px;
		   margin-left:10px;
		   
		   
		   }
   .hdline{
   
   background-color: #2f3337;
   
   }
   
   .description{
   
     background-color:#2f3337;
	 padding: 10px;
	 
   
   }
   
   


.white{
 
 background-color:white;
}



.box{

padding:10px 4px;
display:flex;

}
.container {
  position: relative;
  width: 20%;
}

.image {
  display: block;
  width: 100%;
  height: 100%;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #020000;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  color: #FFD700;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
   
   
   
   
	                                                  <!-- TOP -->

   
   
   
	</style>
   
  </head>
  <body>
         <div class="start">
	 <img src="logo.jpg" class="logo"  width=10% ,height=10% >
	 <div class="topmenu">
          <a href="https://web.facebook.com/%D9%85%D9%90%D8%B1%DA%BE%DB%92-%D8%AF%D9%84-%D8%A2%D8%B1%D8%A7%D8%A1-105489827835871">
         <img alt="fb" src="fb.png"
         width="45" height="45">
      </a>
   
        <a href="https://www.instagram.com/mirhe_dillara/">
         <img alt="insta" src="insta.jpg"
         width="45" height="45">
      </a>
	  
	       <a href="#home">
         <img alt="twitter" src="twitter.png"
         width="45" height="45">
      </a>	 
		 
     </div>
	 </div>
	 
	 
	 <div class="hdline">
	 
	<marquee><h1 style="color:#FFD700;">مرھےدل ا`را</h1></marquee>
	
	 </div>
	 
	 
	 
	 
	 
	 	                                                  <!-- navigation bar -->
														  
														  
														  
														  
	 
	
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php" style="color:#FFD700; font:bold;">Mirhe Dillara  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact us.html">Contact Us</a>
      </li>
      
      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="Products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Add & Modify
                        </a>
                        <?php
                        if(isset($_SESSION['valid'])) {
                        ?>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="add.html">Add Products</a>
                            <a class="dropdown-item" href="view.php">Modify Products</a>
                    
                        </div>
                    </li>
                    

                      <?php  } else {?>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="login.php">Add Products</a>
                              <a class="dropdown-item" href="view.php">Modify Products</a>
                          </div>
                      <?php  } ?>

        
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php
        if(isset($_SESSION['valid'])) {
        ?>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
        <?php  } else {?>
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <?php  } ?>
      </ul>
    </div>
  </div>
</nav>




	                                                  <!-- SLIDER -->





<div class="hdline">
<center><div  id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:100%;height:50%;">
 <div  style="width:75%;height:25%;" class="carousel-inner">
    <div class="carousel-item active">
      <img width="60%" height="25%" class="d-block w-100" src="pro3.jpg" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img width="60%" height="25%"  class="d-block w-100" src="p1.jpg" alt="Second slide"  >
    </div>
    <div class="carousel-item">
      <img width="60%" height="25%"  class="d-block w-100" src="pro4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></center>
</div>







<div class="white">
<br><br>
</div>




<div class="start">
<div class="container">
<center> <marquee> <p style="font-size:50px; color: #FFD700;">DREAM DESIGN & DELIVER<p> </marquee></center></div>

<div class="white">
<br><br>
</div>

	                                                  <!-- DESCRIPTION-->



<center><div class="description">
   <p style="font-size:40px; color:#FFD700;"><b>DESCRIPTION</b></p>
  <p style="font-size:30px; color:black;">We deal in different style of jewelry and handbags of girls</p>
  <p style="font-size:30px; color:black;">Women Partywear dresses,jewelry and other accessories available</p>
    <p style="font-size:30px; color:black;">No compromise on quality,customer requirements are fulfilled here</p>
	  <p style="font-size:30px; color:black;">Free home deliveries,all over pakistan</p>
	    <p style="font-size:30px; color:black;">SHOP NOW!</p>
</div></center>
</div>



<div class="white">
<br><br><br>
</div>


	                                                  <!--PRODUCTS-->


<div class="box">
<div class="container">
  <img src="p2.jpg" alt="Avatar" class="image" width="200" height="200">
  <div class="overlay">
    <div class="text">Price: RS1100/-</div>
  </div>
</div>

<div class="container">
  <img src="x2.jpg" alt="Avatar" class="image" width="200" height="200">
  <div class="overlay">
    <div class="text">Price: RS1800/-</div>
  </div>
</div>


<div class="container">
  <img src="p4.jpg" alt="Avatar" class="image" width="200px" height="200px">
  <div class="overlay">
    <div class="text">Price: RS2500/-</div>
  </div>
</div>



<div class="container">
  <img src="p1.jpg" alt="Avatar" class="image" width="200px" height="200px">
  <div class="overlay">
    <div class="text">Price: RS1800/-</div>
  </div>
</div>
</div>

<div class="white">
<br><br><br>
</div>


<footer>


 <footer style="background-color:#2f3337;padding:15px;color:white;">
        <div style=" float:right; text-align:center; width:100% ; padding-top:5px">

            <a href="https://web.facebook.com/%D9%85%D9%90%D8%B1%DA%BE%DB%92-%D8%AF%D9%84-%D8%A2%D8%B1%D8%A7%D8%A1-105489827835871" target="_blank"> <img src="fb.png" width="24" height="24" /> </a>
            <a href="https://www.instagram.com/mirhe_dillara/" target="_blank"> <img src="insta.jpg" width="24" height="24" /> </a>
            <a href="https://www.snapchat.com" target="_blank"> <img src="snapchat.png" width="24" height="24" /> </a>
            <a href="https://www.twitter.com" target="_blank"> <img src="twitter.png" width="24" height="24" /> </a>
        </div>
        <div style="text-align:center ; color="#FFD700">
            <p><br><br>
                مرھےدل ا`را© <br>
                Dream.Design& Deliver
            </p>
        </div>
    </footer>




</footer>




	 
	 
	 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
 
</head>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>