<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<title>index</title>
</head>
<body>
<p style="text-align:center;">Your response has been recorded <br>Our team will contact you soon...</p>

<?php


$servername = "localhost";
$username = "veere";
$password = "dSi?l?Z{N,As";
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
	$emai = $_REQUEST['emai'];
	$number = $_REQUEST['number'];
	$gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $state = $_REQUEST['state'];
    $city = $_REQUEST['city'];
    // $file = $_REQUEST['file'];
    $query = $_REQUEST['query'];
  
	if (!$conn -> query("INSERT INTO Registrations ( name, emai,number,gender,age,state,city,query) VALUES ('$name', '$emai','$number', '$gender','$age','$state','$city','$query')")) 
	  {
		echo("Error description: " . $conn -> error);
	  }

}

?>

</body>
</html>