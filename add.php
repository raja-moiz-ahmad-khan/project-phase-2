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


<h1 style="color:#FFD700; 	 margin:20px;">Add Products</h1><br><br>


</div>



	                                                  <!-- whitespace -->



<div class="white">
<br><br>
</div>



													  
													  
													  
	<div>
	   
	   
	   
	   	                                                  <!-- Address and map-->
													  
													  
													  
	
                                                             <div class="container" style="margin-top: 5%; color: white">
        <div class="row">
            <div class="col-sm-3" ></div>
            <div class="col-sm-6">
                <?php
                //including the database connection file
                include_once("connection.php");

                if(isset($_POST['Submit']))
                {
                    $name = $_POST['name'];
                    $qty = $_POST['qty'];
                    $price = $_POST['price'];
                    $loginId = $_SESSION['id'];
                    if($_POST['stock'] == 'yes')
                    {
                        $_POST['stock'] = true;
                    }
                    else{
                        $_POST['stock'] = false;
                    }
                    $stock = $_POST['stock'];
                    $code = $_POST['code'];
                    $discount = $_POST['discount'];
                    $size = $_POST['size'];
                    $details = $_POST['details'];
                    $image= $_FILES['file']['name'];

                        // if all the fields are filled (not empty)
                        $target= "uploads/".basename($image);
                        //insert data to database
                        $result = mysqli_query($mysqli, "INSERT INTO products(name, qty, price, login_id, code, instock, discount, size, details, image) 
                        VALUES('$name','$qty','$price', '$loginId', '$code', '$stock', '$discount', '$size', '$details', '$image')");
                        if(move_uploaded_file($_FILES['file']['tmp_name'], $target )){

                            echo "<font color='black'>Data added successfully.<br><br>";

                        }else {

                            echo" file is not uploaded";
                        }
                        //display warning message
                        echo "<button class='btn btn-warning' onclick=document.location='view.php'>View Products</button>";

                }
                ?>
                <button class='btn btn-warning' onclick=document.location='add.html'>Add More</button>
            </div>
            <div class="col-sm-3" ></div>

        </div>
    </div>
    <div style="padding: 10%"></div>
</div>

	  <footer style="backgrou<?php session_start(); ?>

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


<h1 style="color:#FFD700; 	 margin:20px;">Add Products</h1><br><br>


</div>



	                                                  <!-- whitespace -->



<div class="white">
<br><br>
</div>



													  
													  
													  
	<div>
	   
	   


     <?php
include("connection.php");

if(isset($_POST['submit'])) {
    $fname = $_POST['DOCTOR_NAME'];
    $cname = $_POST['DOCTOR_NAME'];
    $qual = $_POST['DOCTOR_QUALIFICATION'];
    $address = $_POST['DOCTOR_ADDRESS'];
    $phone = $_POST['DOCTOR_PHONENO'];
    $cqual = $_POST['DOCTOR_QUALIFICATION'];
    $caddress = $_POST['DOCTOR_ADDRESS'];
    $cphone = $_POST['DOCTOR_PHONENO'];
    $salary = $_POST['DOCTOR_SALARY'];
    $dept = $_POST['DOCTOR_DEPARTMENT'];
    $cdept = $_POST['DOCTOR_DEPARTMENT'];
    $fpc = $_POST['FEES_PER_CALL'];
    $st = $_POST['ST_TIME'];
    $et = $_POST['ED_TIME'];
    $duepay = $_POST['PAYMENT_DUE'];
    $doj = $_POST['doj'];
$drid = $_POST['DOCTOR_NO'];
$dcid = $_POST['DOCTOR_NO'];


    
        mysqli_query($mysqli, "INSERT INTO ALL_DOCTORS(DOCTOR_NO,DOCTOR_DEPARTMENT) VALUES (‘DR'+’$DOCTOR_NO', '$DOCTOR_DEPARTMENT')");

        mysqli_query($mysqli, "INSERT INTO ALL_DOCTORS(DOC_NO,DOCTOR_DEPARTMENT) VALUES (‘DC’+'$DOCTOR_NO', '$DOCTOR_DEPARTMENT')");

        mysqli_query($mysqli, "INSERT INTO DOCTOR_REGISTRATION(DOC_NO, DOCTOR_NAME, DOCTOR_QUALIFICATION, DOCTOR_ADDRESS, DOCTOR_PHONENO, DOCTOR_SALARY, DOJ, ST_TIME, ED_TIME)
        VALUES (‘DR’+'$DOCTOR_NO', '$fname', '$qual', '$address', '$phone', '$salary', '$doj', '$st', '$et')");

        mysqli_query($mysqli, "INSERT INTO DOC_ON_CALL(DOC_NO, DOCTOR_NAME, DOCTOR_QUALIFICATION, FEES_PER_CALL, PAYMENT_DUE, DOCTOR_ADDRESS, DOCTOR_PHONENO )
        VALUES (‘DC’+'$dcid', '$cname', '$cqual', '$fpc', '$duepay', '$caddress', '$cphone')");
    

}
?>





<form method="post" name="formDoc" id=" formDoc " >
<label> ID: (Regular) </label>
    <input class='form-control'  type='number' name='DOCTOR_NO' id='DOCTOR_NO'  placeholder='Your ID...' required> <br>
    <label> Name: (Regular) </label>
    <input class='form-control'  type='text' name='DOCTOR_NAME' id='DOCTOR_NAME' placeholder='Your Name...' required> <br>
    <label> Qualification: </label>
    <input class='form-control'  type='text' name='DOCTOR_QUALIFICATION' id='DOCTOR_QUALIFICATION' placeholder='Your Qualtification...' required> <br>
    <label> Address: </label>
    <input class='form-control'  type='text' name='DOCTOR_ADDRESS' id='DOCTOR_ADDRESS' placeholder='Your Address...' required> <br>
    <label> Phone: </label>
    <input class='form-control'  type='text' name='DOCTOR_PHONENO' placeholder='03XXXXXXXXX' required> <br>
    <label> Salary: </label>
    <input class='form-control'  type='text' name='DOCTOR_SALARY' id='salary' placeholder='Your Salary...' required> <br>
    <label> Date of Joining: </label>
    <input class='form-control'  type='date' name='doj' id='doj' placeholder='Your Date of Joining...' required> <br>
    <label> Department: </label>
<input class='form-control'  type='text' name='DOCTOR_DEPARTMENT' id='DOCTOR_DEPARTMENT'  placeholder='Your Fee...' required> <br>
    
    <label> Start Time: </label>
    <input class='form-control'  type='time' name='ST_TIME' id="st" placeholder='8:00 AM...' value="8:00" required> <br>
    <label> End Time: </label>
    <input class='form-control'  type='time' name='ED_TIME' id="et" placeholder='8:00 PM...' value="10:00" required> <br>
    </div>


    <h2>Doctors On Call</h2>
<label> ID: (On Call) </label>
    <input class='form-control'  type='number' name='dcid' id='dcid'  placeholder='Your ID...' required> <br>
    <label> Name: (On Call) </label>
    <input class='form-control'  type='text' name='oncall-name' id='oncall-name' placeholder='Your Name...' required> <br>
    <label> Qualification: </label>
    <input class='form-control'  type='text' name='cqual' id='qual' placeholder='Your Qualtification...' required> <br>
    <label> Address: </label>
    <input class='form-control'  type='text' name='caddress' id='address' placeholder='Your Address...' required> <br>
    <label> Phone: </label>
    <input class='form-control'  type='text' name='cphone' placeholder='03XXXXXXXXX' required> <br>
    <label> Department: </label>
<input class='form-control'  type=’text’ name='cdept' id='cdept'  placeholder='Your Fee...' required> <br>
    
    <label> Fee Per Call: </label>
    <input class='form-control'  type='number' name='fpc' id="fpc" placeholder='Your Fee...' required> <br>
    <label> Doctor's Payment Due: </label>
    <input class='form-control'  type='number' name='duepay' id="duepay" placeholder='Your Payment...' required> <br>

    
    <input class='btn btn-primary'  type='submit' name='submit' value='Add Doctor Info'>
    </form>

	   
													  
	
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










nd-color:#2f3337;padding:15px;color:white;">
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










