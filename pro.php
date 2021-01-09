<?php session_start(); ?>
<?php

include_once("connection.php");
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$sql = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($mysqli, $sql) or die( mysqli_error($mysqli));

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $qty = $res['qty'];
    $price = $res['price'];
    $code = $res['code'];
    if($res['instock']==true)
    {
        $stock='Yes';
    }
    else{
        $stock='No';
    }
    $discount = $res['discount'];
    $size = $res['size'];
    $details = $res['details'];
    $image=$res['image'];


}

?>

<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="favi.ico" />

	<title><h1><?php echo"$name"?></h1></title>
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
   
   
   
   
   

	 	                                                  <!-- Maps -->
   

		   
		   
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
	 
	 
	 	                                                  <!-- headline -->
	 
	 
	 
	 
	 
	 	 <div class="hdline">
	 
	<marquee><h1 style="color:#FFD700;">مرھےدل ا`را</h1></marquee>
	
	 </div>
	 
	 
	 
	 
	 
	                                                  <!-- navigation bar -->
	 
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:#FFDF00;">Mirhe Dillara</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>

        
        <li><a href="aboutus.html">About Us</a></li>
        <li class="nav-item">
        <a class="nav-link" href="Products.php">Products</a>
      </li>
      <li><a href="contact%20us.html">Contact Us</a></li>
      
      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="Products.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Add &
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="add.html">Add Products</a>
                            <a class="dropdown-item" href="view.php">Modify Products</a>
                    
                        </div>
                    </li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    
      </ul>
    </div>
  </div>
</nav>
	 
	 
	
	
	



<div class="start">


<h1 style="color:#FFD700; 	 margin:20px;text-align:center"><?php echo"$name"?></h1><br><br>


</div>



	                                                  <!-- whitespace -->



<div class="white">
<br><br>
</div>

  <div class="row" style="margin-top: 5%;">
  <div class="col-sm-8" style="padding: 5%" >
      <img src="uploads/<?php echo"$image" ?>" style="border-radius: 5%; width: 80%; height: 70%">
    <h3 style="padding-top: 3%">Description:</h3>
    <p><b><?php echo"$details"?></b><br><br></p>
  </div>
  <div class="col-sm-4" style="float: left; padding: 5%">
    <p><br>
      <b>Product Price:</b> <?php echo"$price"?>  <br><br>
      <b>Product Quantity:</b> <?php echo"$qty"?>  <br><br>
      <b>Product Code:</b> <?php echo"$code"?>  <br><br>
      <b>Product in Stock:</b> <?php echo"$stock"?>  <br><br>
      <b>Product Discount:</b> <?php echo"$discount"?>  <br><br>
      <b>Available Sizes:</b> <?php echo"$size"?>  <br><br>
    </p>
  </div>
  </div>
    <div style="padding: 6%"></div>
</div>



													  
													  
													  

    <br>
    <br>
    <br>
    <br>
	  <footer style="background-color:#2f3337;padding:15px;color:white;">
        <div style=" float:right; text-align:center; width:100% ; padding-top:5px">

            <a href="https://web.facebook.com/%D9%85%D9%90%D8%B1%DA%BE%DB%92-%D8%AF%D9%84-%D8%A2%D8%B1%D8%A7%D8%A1-105489827835871" target="_blank"> <img src="fb.png" width="24" height="24" /> </a>
            <a href="https://www.instagram.com/mirhe_dillara/" target="_blank"> <img src="insta.jpg" width="24" height="24" /> </a>
            <a href="https://www.snapchat.com" target="_blank"> <img src="snapchat.png" width="24" height="24" /> </a>
            <a href="https://www.twitter.com" target="_blank"> <img src="twitter.png" width="24" height="24" /> </a>
        </div>
        <div style="text-align: center ; color="#FFD700">
            <p><br><br>
                مرھےدل ا`را© <br>
                Dream.Design& Deliver
            </p>
        </div>
    </footer>
	 </body>

</html>










