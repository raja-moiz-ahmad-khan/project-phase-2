<?php session_start(); ?>

<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="favi.ico" />

	<title>Sign Up</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUOEEEI_y7YP5yq3PWKJ5ChNfRNmleSgA&callback=initMap&libraries=&v=weekly" defer ></script>
 <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 31.3904655, lng: 74.2402368 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
<style>
.white{
 
 background-color:white;
}

.responsive {
            max-width: 100%;
            height: auto;
        }




.start{

   padding-top:5px ;
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
   
   
   
   .box{
   float:right;
   
   padding:100px 25px 100px 25px;
   
   
   
   }
   
   
   ::-webkit-file-upload-button {
    background: seagreen;
    color: white;
    padding: 3%;
    border-radius: 10%;
}

::-webkit-file-upload-button:hover {
    background: #888888;
    color: white;
    padding: 3%;
    border-radius: 10%;
}

   
   

	 	                                                  <!-- Maps -->
   

		   
		   
</style>
</head>
<body>
<div>


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
	 
	 
	 	                                                  <!-- headline -->
	 
	 
	 
	 
	 
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
	 
	 
	
	
	



<div class="start">


<h1 style="color:#FFD700; 	 margin:20px;">Products</h1><br><br>


</div>



<!-- whitespace -->



<div class="white">
<br><br>
</div>



													  
													  
													  
	<div>
	   
	   
	   
	<!-- Address and map-->
													  
													  
													  

<div>
<div>
    <h1>Products</h1>
    <br>
    <br>
    <div class="row" style="height: 100%">
        <?php
        //including the database connection file
        include_once("connection.php");


        $result = mysqli_query($mysqli, " select * from products");
        while ($fetrow = mysqli_fetch_array($result)) {
        ?>
        <div class="col-md-3">
            <a href="pro.php?id=<?php echo $fetrow['id']?>"><img src="uploads/<?php echo $fetrow['image']; ?>" style="border-radius: 5%"  height="50%" width="100%" /></a>
            <br><br>
            <a href="pro.php?id=<?php echo $fetrow['id']?>"><h4 style="text-align:center"><?php echo $fetrow['name']?></h4> </a>

            <br><br>
        </div>
        <?php } ?>
    </div>
</div>
</div>
</div>
	  
 </body>


</html>










