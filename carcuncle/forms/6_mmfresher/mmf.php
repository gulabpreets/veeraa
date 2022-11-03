<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<title>Mr. &amp; Ms.</title>
 <link rel="icon" href="img/nav-bar-logo.png">
</head>
	
	<style>
	
	 h1{
    margin: 40px 50px 5px 50px;
	text-align: center;
	color: white;
	background-color: black;
	padding: 30px;
	border: dotted black 20px;
	border-radius: 20px;
/*	margin-left: */
	
}
.message{
	border-radius: 20px;
}
.message p{

	text-align: center;
	font-size: 30px;
	
}

.warn p{
	text-align: center;
	color: red;
	font-size: 20px;
}

.warn button{
	padding: 10px;
	border-radius: 25px;
	margin-top: 20px;
/*	width: 100px;*/
}
	
	</style>
	
<body>
		<h1>Thanks for Registration</h1>
<!--	<p>Our team will contact you within 24 hours</p>-->
</div>
	<div class="warn">
	   <p>If you have any query feel free to contact<br> 
		<button> +91 8571994476</button>
		</p>
	</div>

<?php


$servername = "localhost";
$username = "veere";
$password = "}nxNup_Suj!B";
$dbname = "veere_veera";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // collect value of input field
    $name = $_REQUEST['name'];
	$roll = $_REQUEST['roll'];
	$branch = $_REQUEST['branch'];
	$email = $_REQUEST['email'];
	$number = $_REQUEST['number'];
//	$gender = $_REQUEST['gender'];
//    $age = $_REQUEST['age'];
//    $state = $_REQUEST['state'];
//    $city = $_REQUEST['city'];
//    $file = $_REQUEST['file'];
    $query = $_REQUEST['query'];
	
	
  
	if (!$conn -> query("INSERT INTO mmf ( name, roll, branch, email,number,query) VALUES ('$name', '$roll', '$branch' ,'$email','$number','$query')")) 
	  {
		echo("Error description: " . $conn -> error);
	  }

}

?>

</body>
</html>