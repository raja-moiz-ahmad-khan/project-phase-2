<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($mysqli, $sql) or die( mysqli_error($mysqli));

if($res = mysqli_fetch_array($result))
{
	$delimg=$res['image'];
}


unlink("uploads/$delimg");
//deleting the row from table
$results=mysqli_query($mysqli, "DELETE FROM products WHERE id=$id");

//redirecting to the display page (view.php in our case)
header("Location:view.php");
?>

